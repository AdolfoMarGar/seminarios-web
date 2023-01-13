<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Seminar;


class DocumentsController extends Controller
{
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
        Document::create($r->all());

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
        $a->save();

        return redirect()->route('documents.index');
    }

    public function destroy($id) {
        $s = Document::find($id);
        $s->delete();
        return redirect()->route('documents.index');
    }
}
