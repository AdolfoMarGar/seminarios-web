<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;

class SeminarController extends Controller{

    public function index() {
        $seminarList = Seminar::all();

        return view('admin.seminar.all', ['seminarList'=>$seminarList]);
    }

    public function show($id) {
        $s = Seminar::find($id);

        return view('admin.seminar.show', $data);
    }

    public function create() {
        return view('admin.seminar.form');
    }

    public function store(Request $r) {
        Seminar::create($r->all());

        return redirect()->route('seminar.index');
    }

    public function edit($id) {
        $seminar = Seminar::find($id);

        return view('admin.seminar.form', array('seminar' => $seminar));
    }

    public function update($id, Request $r) {
        $a = Seminar::find($id);
        $a->fill($r->all()); 
        $a->save();

        return redirect()->route('seminar.index');
    }

    public function destroy($id) {
        $s = Seminar::find($id);
        $s->delete();
        
        return redirect()->route('seminar.index');
    }

    
}
