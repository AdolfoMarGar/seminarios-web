<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presentation;

class PresentationController extends Controller
{
    
    public function index() {
        $presentationList = Presentation::all();
        foreach($presentationList as $l){
            $seminarList[]= $l->seminar;
            $speakerList[]=$l->speaker;
        }
        $data["presentationList"] =$presentationList;
        $data["seminarList"] =$seminarList;
        $data["speakerList"] =$speakerList;
        
        return view('presentation.all', $data);
    }

    public function show($id) {
        $s = Presentation::find($id);
        $data['presentation'] = $s;
        return view('presentation.show', $data);
    }

    public function create() {
        return view('presentation.form');
    }

    public function store(Request $r) {
        Presentation::create($r->all());
        
        return redirect()->route('presentation.index');
    }

    public function edit($id) {
        $presentation = Presentation::find($id);
        return view('presentation.form', array('presentation' => $presentation));
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
