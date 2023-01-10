<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;


class SeminarController extends Controller
{
    public function index() {
        $seminarList = Seminar::all();
        return view('seminar.all', ['seminarList'=>$seminarList]);
    }

    public function show($id) {
        $s = Seminar::find($id);
        $data['seminar'] = $s;
        return view('seminar.show', $data);
    }

    public function create() {
        return view('seminar.form');
    }

    public function store(Request $r) {
        $s = new Seminar();
        $s->year = $r->year;
        $s->location = $r->location;
        $s->hosts = $r->hosts;
        $s->save();
        return redirect()->route('seminar.index');
    }

    public function edit($id) {
        $seminar = Seminar::find($id);
        return view('seminar.form', array('seminar' => $seminar));
    }

    public function update($id, Request $r) {
        $s = Seminar::find($id);
        $s->year = $r->year;
        $s->location = $r->location;
        $s->hosts = $r->hosts;
        $s->save();
        return redirect()->route('seminar.index');
    }

    public function destroy($id) {
        $s = Seminar::find($id);
        $s->delete();
        return redirect()->route('seminar.index');
    }
}
