<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

class AdminController extends Controller
{
    public function index() {
        $adminList = Admin::all();
        return view('admin.all', ['adminList'=>$adminList]);
    }

    public function show($id) {
        $s = Admin::find($id);
        $data['admin'] = $s;
        return view('admin.show', $data);
    }

    public function create() {
        return view('admin.form');
    }

    public function store(Request $r) {
        Admin::create($r->all());
        
        return redirect()->route('admin.index');
    }

    public function edit($id) {
        $admin = Admin::find($id);
        return view('admin.form', array('admin' => $admin));
    }

    public function update($id, Request $r) {
        $a = Admin::find($id);
        $a->fill($r->all()); 
        $a->save();

        return redirect()->route('admin.index');
    }

    public function destroy($id) {
        $s = Admin::find($id);
        $s->delete();
        return redirect()->route('admin.index');
    }
}
