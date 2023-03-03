<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speaker;
class SpeakerController extends Controller{
    public function __construct(){
        $this->middleware("auth"); 
    }
    
    public function index() {
        $speakerList = Speaker::all();

        return view('admin.speaker.all', ['speakerList'=>$speakerList]);
    }

    public function show($id) {
        $s = Speaker::find($id);
        $data['speaker'] = $s;
        return view('admin.speaker.show', $data);
    }

    public function create() {
        return view('admin.speaker.form');
    }

    public function store(Request $r) {
        $speaker = new Speaker($r->all());
        $speaker->save();

        return redirect()->route('speaker.index');
    }

    public function edit($id) {
        $speaker = Speaker::find($id);

        return view('admin.speaker.form', array('speaker' => $speaker));
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
