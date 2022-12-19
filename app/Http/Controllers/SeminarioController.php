<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminario;

class SeminarioController extends Controller
{

    public function index() {
        $seminarioList = Seminario::all();
        return view('seminario.all', ['seminarioList'=>$seminarioList]);
    }

    public function show($id) {
        $s = Seminario::find($id);
        $data['seminario'] = $s;
        return view('seminario.show', $data);
    }

    public function create() {
        return view('seminario.form');
    }

    public function store(Request $r) {
        $s = new Seminario();
        $s->name = $r->name;
        $s->description = $r->description;
        $s->price = $r->price;
        $s->anio = $r->anio;
        $s->save();
        return redirect()->route('seminario.index');
    }

    public function edit($id) {
        $seminario = Seminario::find($id);
        return view('seminario.form', array('seminario' => $seminario));
    }

    public function update($id, Request $r) {
        $s = Seminario::find($id);
        $s->name = $r->name;
        $s->description = $r->description;
        $s->price = $r->price;
        $s->anio = $r->anio;
        $s->save();
        return redirect()->route('seminario.index');
    }

    public function destroy($id) {
        $s = Seminario::find($id);
        $s->delete();
        return redirect()->route('seminario.index');
    }
}
