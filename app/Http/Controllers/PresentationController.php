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
        $presentation = new Presentation($r->all());
        $presentation->speaker()->attach($r->speaker);
        $presentation->save();
        
        return redirect()->route('presentation.index');
    }

    public function edit($id) {
        $presentation = Presentation::find($id);
        $seminarList = Seminar::all();
        $speakerList = Speaker::all();

        $data["presentation"] = $presentation;
        $data["seminarList"] = $seminarList;
        $data["speakerList"] = $speakerList;

        return view('presentation.form', $data);
    }

    public function update($id, Request $r) {
        $a = Presentation::find($id);
        $a->fill($r->all()); 
        $a->speaker()->sync($r->speaker); 
        $a->save();

        return redirect()->route('presentation.index');
    }

    public function destroy($id) {
        $s = Presentation::find($id);
        $s->delete();
        $s->speaker()->detach();
        
        return redirect()->route('presentation.index');
    }
}
