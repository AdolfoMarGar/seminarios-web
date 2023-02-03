<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speaker;
class SpeakerController extends Controller{
    
    public function index() {
        $speakerList = Speaker::all();

        return view('speaker.all', ['speakerList'=>$speakerList]);
    }

    public function show($id) {
        $s = Speaker::find($id);
        $data['speaker'] = $s;
        return view('speaker.show', $data);
    }

    public function create() {
        return view('speaker.form');
    }

    public function store(Request $r) {
        $speaker = new Speaker($r->all());
        $speaker->save();

        return redirect()->route('speaker.index');
    }

    public function edit($id) {
        $speaker = Speaker::find($id);

        return view('speaker.form', array('speaker' => $speaker));
    }

    public function update($id, Request $r) {
        $a = Speaker::find($id);
        $a->fill($r->all()); 
        $a->save();

        return redirect()->route('speaker.index');
    }

    public function destroy($id) {
        $s = Speaker::find($id);
        $s->presentation()->detach();
        $s->delete();
        
        return redirect()->route('speaker.index');
    }
}
