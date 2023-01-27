<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myrequest;
use App\Models\Seminar;
use App\Models\Document;
use App\Models\Presentation;
use App\Models\User;


class MyrequestController extends Controller{
    public function index() {
        $myrequestList = Myrequest::all();
        return view('request.all', ['myrequestList'=>$myrequestList]);
    }

    public function show($id) {
        $s = Myrequest::find($id);
        $data['myrequest'] = $s;
        return view('request.show', $data);
    }

    public function create() {
        $u = User::all();
        $p = Presentation::all();
        $s = Seminar::all();
        $data["userList"]= $u;
        $data["presentationList"]= $p;
        $data["seminarList"]= $s;
        $data['myrequest']= null;

        return view('request.form', $data);
    }

    public function store(Request $r) {
        $myrequest = new Myrequest($r->all());
        $myrequest->document_id = $this->storeDocument($r);
        $myrequest->save();
 
        return redirect()->route('request.index');
    }

    public function edit($id) {
        $myrequest = Myrequest::find($id);
        $u = User::all();
        $p = Presentation::all();
        $s = Seminar::all();
        $data["userList"]= $u;
        $data["presentationList"]= $p;
        $data["seminarList"]= $s;
        $data['myrequest']= $myrequest;

        return view('request.form', $data);
    }

    public function update($id, Request $r) {
        $a = Myrequest::find($id);
        $this->updateDocument($r, $a->document_id);
        $a->fill($r->all()); 
        $a->save(); 

        return redirect()->route('request.index');
    }

    public function destroy($id) {
        $s = Myrequest::find($id);
        $this->destroyDocument($s->document_id);
        $s->delete();
        return redirect()->route('request.index');
    }

    public function storeDocument(Request $r) {
        $dir = Document::fileUpload($r);
        if(!$dir){
            echo"error";
            return null;
        }else{
            $doc = new Document($r->all());
            $doc->dir = $dir;
            $doc->type=-1;
            $doc->save();
            return $doc->id;
        }
    }

    public function destroyDocument($id){
        $s = Document::find($id);
        $path = $s->dir;

        if(Document::fileDelete($path)){
            $s->delete();
            return true;
        }else{
            echo("ERRORRRRRR");
            return false;
        }
    }

    public function updateDocument(Request $r, $id){
        $a = Document::find($id);
        $a->fill($r->all()); 
        $r->type = -1;
        if(isset($r->file)){
            Document::fileDelete($a->dir);
            $dir=Document::fileUpload($r);
            $a->dir=$dir;
        }
        
        $a->save();
    }
    
    public function acept($id){
        $myr = Myrequest::find($id);
        $doc = Document::find($myr->document_id);

        $dir =  Document::fileMove($doc->dir, $doc->type, $myr->type);
        $doc->dir = $dir;
        $doc->type = $myr->type;

        $doc->save();
        $myr->delete();

        return redirect()->route('request.index');
    }
}
