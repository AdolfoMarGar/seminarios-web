<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;
use App\Models\Presentation;
use App\Models\Document;
use App\Models\Myrequest;
use App\Models\User;

class FrontendController extends Controller{

    public function indexWeb(){
        return view('web.index');
    }

    public function nextSeminar(){
        return view('web.static.proximoseminario');
    }

    public function historyWeb(){
        return view('web.static.nuestrahistoria');
    }

    public function aboutUs(){
        return view('web.static.aboutus');
    }

    #Seminarios
    public function allSeminar(){
        $seminarList = Seminar::orderBy('year','desc')->get();
        return view('web.seminar.all', ['seminarList'=>$seminarList]);
    }

    public function idSeminar($id){
        $s = Seminar::find($id);
        $acta = Document::where("seminar_id", $id)->where("mandatory","1")->get()[0]??null;

        $data['seminar'] = $s;
        $data["acta"] = $acta->dir??0;


        return view('web.seminar.show', $data);
    }

    #Presentaciones
    public function allPresentation(){
        $presentationList = Presentation::all();
        $yearList = Seminar::orderBy('year','desc')->select('year', 'location')->get();

        $data['yearList'] = $yearList;
        $data['presentationList'] = $presentationList;

        return view('web.presentation.all', $data);
    }

    public function idPresentation($id){
        $presentation = Presentation::find($id);
        $doc = Document::where("presentation_id", $id)->get()[0]??null;
        
        $data['doc'] = $doc;
        $data['presentation'] = $presentation;

        return view('web.presentation.show', $data);
    }

    #peticiones
    public function allRequest(){
        $requestList = Myrequest::where("user_id",auth()->user()->id)->get()??null;
        $data['requestList']=$requestList;
        return view ('web.request.all', $data);
    }

    public function newRequest(){
        $s = Seminar::all();
        $data["seminarList"]= $s;

        $p = Presentation::where("seminar_id", $s[0]->id)->get()??null;
        $data["presentationList"]= $p;

        $data['myrequest']= null;

        return view('web.request.form', $data);
    }

    public function editRequest($id){
        $myrequest = Myrequest::find($id);
        $u = User::all();
        $p = Presentation::all();
        $s = Seminar::all();
        $data["userList"]= $u;
        $data["presentationList"]= $p;
        $data["seminarList"]= $s;
        $data['myrequest']= $myrequest;

        return view('web.request.form', $data);
    }

    public function destroyRequest(){
        $s = Myrequest::find($id);
        //$this->destroyDocument($s->document_id);
        $s->delete();
        return redirect()->route('web.request.all');
    }

    public function storeRequest(Request $r) {
        $myrequest = new Myrequest($r->all());
        $myrequest->document_id = $this->storeDocument($r);
        $myrequest->save();
 
        return redirect()->route('web.request.all');
    }

    public function updateRequest(Request $r) {
        $a = Myrequest::find($id);
        $this->updateDocument($r, $a->document_id);
        $a->fill($r->all()); 
        $a->save(); 

        return redirect()->route('web.request.all');
    }


    public function storeDocument(Request $r) {
        $r->type=-1;

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

}
