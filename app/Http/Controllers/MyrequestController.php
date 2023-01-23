<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myrequest;
use App\Models\Seminar;
use App\Models\Document;
use App\Models\Presentation;
use App\Models\User;


class MyrequestController extends Controller
{
    
    public function index() {
        $myrequestList = Myrequest::all();
        return view('request.all', ['myrequestList'=>$myrequestList]);
    }

    public function show($id) {
        $s = Myrequest::find($id);
        $data['myrequest'] = $s;
        return view('request.show', $data);
    }

    public function create() {
        $u = User::all();
        $p = Presentation::all();
        $s = Seminar::all();
        $data["userList"]= $u;
        $data["presentationList"]= $p;
        $data["seminarList"]= $s;
        $data['myrequest']= null;

        return view('request.form', $data);
    }

    public function store(Request $r) {
        $myrequest = new Myrequest($r->all());
        $doc = new Document();
        $myrequest->document_id=$doc->storeRequest($r);
        $myrequest->save();

        return redirect()->route('request.index');
    }

    public function edit($id) {
        $myrequest = Myrequest::find($id);
        $u = User::all();
        $p = Presentation::all();
        $s = Seminar::all();
        $data["userList"]= $u;
        $data["presentationList"]= $p;
        $data["seminarList"]= $s;
        $data['myrequest']= $myrequest;

        return view('request.form', $data);
    }

    public function update($id, Request $r) {
        $a = Myrequest::find($id);
        $a->fill($r->all()); 
        $a->save(); 

        return redirect()->route('request.index');
    }

    public function destroy($id) {
        $s = Myrequest::find($id);
        $s->delete();
        return redirect()->route('request.index');
    }
    
}
