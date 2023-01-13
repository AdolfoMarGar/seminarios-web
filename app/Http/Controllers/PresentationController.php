<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presentation;
use App\Models\Seminar;
use App\Models\Speaker;

class PresentationController extends Controller
{
    
    public function index() {
        $presentationList = Presentation::all();

        return view('presentation.all', ['presentationList'=>$presentationList]);
    }

    public function show($id) {
        $s = Presentation::find($id);
        $data['presentation'] = $s;
        return view('presentation.show', $data);
    }

    public function create() {
        $seminarList = Seminar::all();
        $speakerList = Speaker::all();
        $data["seminarList"] = $seminarList;
        $data["speakerList"] = $speakerList;
        $data["presentation"] = null;


        return view('presentation.form', $data);
    }

    public function store(Request $r) {
        Presentation::create($r->all());
        
        return redirect()->route('presentation.index');
    }

    public function edit($id) {
        $presentation = Presentation::find($id);
        $seminarList = Seminar::all();
        $speakerList = Speaker::all();
        $data["seminarList"] = $seminarList;
        $data["speakerList"] = $speakerList;
        $data["presentation"] = $presentation;

        return view('presentation.form', $data);
    }

    public function update($id, Request $r) {
        $a = Presentation::find($id);
        $a->fill($r->all()); 
        $a->save();

        return redirect()->route('presentation.index');
    }

    public function destroy($id) {
        $s = Presentation::find($id);
        $s->delete();
        return redirect()->route('presentation.index');
    }
}
