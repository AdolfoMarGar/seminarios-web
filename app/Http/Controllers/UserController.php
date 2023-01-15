<?php

namespace App\Http\Controllers;

use Illuminate\Http\User;

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

    public function store(User $r) {
        $user = new User($r->all());
        $user->myrequest()->attach($r->myrequest);
        $user->save();

        return redirect()->route('user.index');
    }

    public function edit($id) {
        $user = User::find($id);

        return view('user.form', array('user' => $user));
    }

    public function update($id, User $r) {
        $a = User::find($id);
        $user->fill($r->all()); 
        $user->roles()->sync($r->myrequest); 
        $user->save(); 

        return redirect()->route('user.index');
    }

    public function destroy($id) {
        $s = User::find($id);
        $s->myrequest()->detach();
        $s->delete();
        return redirect()->route('user.index');
    }
}
