<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userdata;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{
    public function __construct(){
        $this->middleware("auth"); 
    }
    
    public function index() {
        $userList = User::all();
        
        return view('admin.user.all', ['userList'=>$userList]);
    }

    public function show($id) {
        $s = User::find($id);
        $data['user'] = $s;
        
        return view('admin.user.show', $data);
    }

    public function create() {
        return view('admin.user.form');
    }

    public function store(Request $r) {
        $user = new User($r->all());
        if($user->type==2){
            $userdata = new Userdata($r->all());
            $userdata->save();
            $user->userdata_id= $userdata->id;
        }
        $user->password = Hash::make($r->password);

        $user->save();

        return redirect()->route('user.index');
    }

    public function edit($id) {
        $user = User::find($id);

        return view('admin.user.form', array('user' => $user));
    }

    public function update($id, Request $r) {
        $user = User::find($id);
        if($user->userdata_id!=null){
            $userdata = Userdata::find($user->userdata_id);
            $userdata->fill($r->all()); 
            $userdata->save(); 
        }
        $user->fill($r->all()); 
        $user->password = Hash::make($r->password);
        $user->save(); 

        return redirect()->route('user.index');
    }

    public function destroy($id) {
        $s = User::find($id);
        if($s->userdata_id!=null){
            $userdata = Userdata::find($s->userdata_id);
            $userdata->delete();
        }
        $s->delete();

        return redirect()->route('user.index');
    }
}
