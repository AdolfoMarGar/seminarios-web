<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    
    public function index() {
        $userList = User::all();
        return view('user.all', ['userList'=>$userList]);
    }

    public function show($id) {
        $s = User::find($id);
        $data['user'] = $s;
        return view('user.show', $data);
    }

    public function create() {
        return view('user.form');
    }

    public function store(Request $r) {
        $user = new User($r->all());
        $user->save();

        return redirect()->route('user.index');
    }

    public function edit($id) {
        $user = User::find($id);

        return view('user.form', array('user' => $user));
    }

    public function update($id, Request $r) {
        $user = User::find($id);
        $user->fill($r->all()); 
        $user->save(); 

        return redirect()->route('user.index');
    }

    public function destroy($id) {
        $s = User::find($id);
        $s->delete();
        return redirect()->route('user.index');
    }
}
