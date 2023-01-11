<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Seminar;


class DocumentsController extends Controller
{
    public function index() {
        $documentList = Document::all();
        $yearList =[];
        foreach($documentList as $doc){
            $yearList[] = Seminar::find($doc->seminars_id);

        }
        $data["documentList"] = $documentList;
        $data["yearList"] = $yearList;
        return view('document.all', $data);
    }

    public function show($id) {
        $s = Document::find($id);
        $s->seminar->year;//Tambien se puede acceder desde blade de esta manera. (seminar es el nombre que se le pone a la relacion en el modelo)
        //$year = new Seminar();

        return view('document.show', $data);
    }

    public function create() {
        return view('document.form');
    }

    public function store(Request $r) {
        $s = new Document();
        $s->type = $r->type;
        $s->dir = $r->dir;
        $s->seminars_id = $r->seminars_id;

        $s->save();
        return redirect()->route('documents.index');
    }

    public function edit($id) {
        $d = Document::find($id);
        return view('document.form', array('document' => $d));
    }

    public function update($id, Request $r) {
        $s = new Document();
        $s->type = $r->type;
        $s->dir = $r->dir;
        $s->seminars_id = $r->seminars_id;
        $s->save();
        return redirect()->route('documents.index');
    }

    public function destroy($id) {
        $s = Document::find($id);
        $s->delete();
        return redirect()->route('documents.index');
    }
}
