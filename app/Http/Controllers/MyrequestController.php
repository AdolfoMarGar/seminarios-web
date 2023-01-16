<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myrequest;
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
        $u = new User();
        $u = $u->all();
        $data['myrequest']= null;
        $data["userList"]= $u;
        return view('request.form', $data);
    }

    public function store(Request $r) {
        $myrequest = new Myrequest($r->all());
        #$myrequest->user()->attach($r->user);
        $myrequest->save();

        return redirect()->route('request.index');
    }

    public function edit($id) {
        $myrequest = Myrequest::find($id);
        $u = new User();
        $u = $u->all();
        $data['myrequest']= $myrequest;
        $data["userList"]= $u;

        return view('request.form', $data);
    }

    public function update($id, Request $r) {
        $a = Myrequest::find($id);
        $a->fill($r->all()); 
        #$myrequest->roles()->sync($r->user); 
        $a->save(); 

        return redirect()->route('request.index');
    }

    public function destroy($id) {
        $s = Myrequest::find($id);
        #$s->user()->detach();
        $s->delete();
        return redirect()->route('request.index');
    }
}
