<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Presentation;
use App\Models\Seminar;


class DocumentsController extends Controller{
    
    public function index() {
        $documentList = Document::all();

        $data["documentList"] = $documentList;

        return view('document.all', $data);
    }

    public function show($id) {
        $s = Document::find($id);

        return view('document.show', $data);
    }

    public function create() {
        $seminarList = Seminar::all();
        $presentationList = Presentation::all();

        $data["seminarList"] = $seminarList;
        $data["presentationList"] = $presentationList;
        $data["document"] = null;

        return view('document.form', $data);
    }

    public function store(Request $r) {
        $dir = $this->fileUpload($r);
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
        $presentationList = Presentation::all();
        $d = Document::find($id);

        $data["seminarList"] = $seminarList;
        $data["presentationList"] = $presentationList;
        $data["document"] = $d;

        return view('document.form', $data);
    }

    public function update($id, Request $r) {
        $a = Document::find($id);
        $typeBefore = $a->type;
        $a->fill($r->all()); 
        if(isset($r->file)){
            $this->fileDelete($a->dir);
            $dir=$this->fileUpload($r);
            $a->dir=$dir;
        }else{
            if($typeBefore!=$a->type){
                $a->dir =$this->fileMove($a->dir,$typeBefore, $a->type);
            }
        }
        $a->save();
     
        return redirect()->route('documents.index');
    }

    public function destroy($id) {
        $s = Document::find($id);
        $path = $s->dir;

        if($this->fileDelete($path)){
            $s->delete();
            return redirect()->route('documents.index');

        }else{
            echo("ERRORRRRRR");
        }
        

    }

    public function fileUpload(Request $r){
        $r->validate(['file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048']);

        if($r->file()) {
            $fileName = time().'_'.$r->file->getClientOriginalName();

            switch ($r->type) {
                case -1:
                    $filePath = 'TEMP';
                    break;
                case 1:
                    $filePath = 'PDFS';
                    break;
                case 2:
                    $filePath = 'PPTS';
                    break;
                case 3:
                    $filePath = 'PHOTOS';
                    break;
            }
        
            $r->file('file')->move($filePath, $fileName);

            return $filePath."/".$fileName;
        }else{
            return false;
        }
    }

    public function fileDelete($path){
        if (File::exists($path)) {
            File::delete($path);
            return true;
        }else{
            return false;
        }

    }

    public function fileMove($path, $typeBefore, $typeNew){
        if (File::exists($path)) {
            switch ($typeNew) {
                case -1:
                    $dir = 'TEMP';
                    break;
                case 1:
                    $dir = 'PDFS';
                    break;
                case 2:
                    $dir = 'PPTS';
                    break;
                case 3:
                    $dir = 'PHOTOS';
                    break;
            }

            switch ($typeBefore) {
                case -1:
                    $pathFinal= str_replace("TEMP", $dir, $path);
                    break;
                case 1:
                    $pathFinal= str_replace("PDFS", $dir, $path);
                    break;
                case 2:
                    $pathFinal= str_replace("PPTS", $dir, $path);
                    break;
                case 3:
                    $pathFinal= str_replace("PHOTOS", $dir, $path);
                    break;
            }
            File::move($path,$pathFinal);

            return $pathFinal;
        }else{
            return false;
        }

    }

    public function storeRequest(Request $r) {
        $dir = $this->fileUpload($r);
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
}
