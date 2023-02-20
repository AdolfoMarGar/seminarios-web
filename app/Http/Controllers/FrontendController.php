<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;
use App\Models\Presentation;

class FrontendController extends Controller{

    public function indexWeb(){
        return view('web.index');
    }

    public function historyWeb(){
        return view('web.static.nuestrahistoria');
    }

    public function allSeminar(){
        $seminarList = Seminar::orderBy('year','desc')->get();
        return view('web.seminar.all', ['seminarList'=>$seminarList]);
    }

    public function idSeminar($id){
        $s = Seminar::find($id);
        $p = Presentation::where("seminar_id", $id)->get();

        $data['seminar'] = $s;
        $data['presentationList'] = $p;

        return view('web.seminar.show', $data);
    }

}
