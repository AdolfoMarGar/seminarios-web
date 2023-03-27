<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Presentation;
use App\Models\Seminar;


class DocumentsController extends Controller{
    public function __construct(){
        $this->middleware("isAdmin"); 
    }

    public function index() {
        $documentList = Document::all();

        $data["documentList"] = $documentList;

        return view('admin.document.all', $data);
    }


    public function create() {
        $seminarList = Seminar::all();
        $presentationList = Presentation::where("seminar_id", $seminarList[0]->id)->get()??null;

        $data["seminarList"] = $seminarList;
        $data["presentationList"] = $presentationList;
        $data["document"] = null;

        return view('admin.document.form', $data);
    }

    public function store(Request $r) {
        $dir = Document::fileUpload($r);
        if(!$dir){
            echo"error";
        }else{
            $doc = new Document($r->all());
            $doc->dir = $dir;
            $doc->save();
            return redirect()->route('documents.index');
        }
        
    }

    public function edit($id) {
        $seminarList = Seminar::all();
        $presentationList = Presentation::where("seminar_id", $seminarList[0]->id)->get()??null;
        $d = Document::find($id);

        $data["seminarList"] = $seminarList;
        $data["presentationList"] = $presentationList;
        $data["document"] = $d;

        return view('admin.document.form', $data);
    }

    public function update($id, Request $r) {
        $a = Document::find($id);
        $typeBefore = $a->type;
        $a->fill($r->all()); 
        if(isset($r->file)){
            Document::fileDelete($a->dir);
            $dir=Document::fileUpload($r);
            $a->dir=$dir;
        }else{
            if($typeBefore!=$a->type){
                $a->dir =Document::fileMove($a->dir,$typeBefore, $a->type);
            }
        }
        $a->save();
     
        return redirect()->route('documents.index');
    }

    public function destroy($id) {
        $s = Document::find($id);
        $path = $s->dir;

        if(Document::fileDelete($path)){
            $s->delete();
            return redirect()->route('documents.index');

        }else{
            echo("ERRORRRRRR");
        }
        

    }
}
