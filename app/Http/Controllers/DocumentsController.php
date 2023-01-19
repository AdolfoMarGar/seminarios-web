<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Seminar;


class DocumentsController extends Controller
{
    public function file() {
       
        return view('document.file');
    }

    public function fileUpload(Request $r){
        $document = new Document();
        $r->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);
        if($r->file()) {
            $fileName = time().'_'.$r->file->getClientOriginalName();

            switch ($r->type) {
                case -1:
                    $filePath = 'temp';
                    break;
                case 1:
                    $filePath = 'pdf';
                    break;
                case 2:
                    $filePath = 'ppt';
                    break;
                case 3:
                    $filePath = 'photo';
                    break;
            }
            $r->file('file')->move($filePath, $fileName);
            return $filePath."/".$fileName;
        }
   }

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
        $data["seminarList"] = $seminarList;
        $data["document"] = null;

        return view('document.form', $data);
    }

    public function store(Request $r) {
        $dir = $this->fileUpload($r);
        $doc = new Document();
        $doc->type = $r->type;
        $doc->dir = $dir;
        $doc->seminar_id = $r->seminar_id;
        $doc->save();
        
        return redirect()->route('documents.index');
    }

    public function edit($id) {
        $d = Document::find($id);
        $seminarList = Seminar::all();
        $data["seminarList"] = $seminarList;
        $data["document"] = $d;
        return view('document.form', $data);
    }

    public function update($id, Request $r) {
        $a = Document::find($id);
        $a->fill($r->all()); 
        if(isset($r->file)){
            $dir=$this->fileUpload($r);
            $a->dir=$dir;
        }
    
        $a->save();
        //$r no almacena el archivo si se quiere subir otro. no se si por put o que
        //Comprobado con dd. Si no se envia archivo no entra en if y furula
        //return redirect()->route('documents.index');
    }

    public function destroy($id) {
        $s = Document::find($id);
        $path = $s->dir;
        if (File::exists($path)) {
            File::delete($path);
            $s->delete();
            return redirect()->route('documents.index');
        }
        echo("ERRORRRRRR");
    }
}
