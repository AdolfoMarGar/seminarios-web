<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;
use App\Models\Presentation;
use App\Models\Document;

class FrontendController extends Controller{

    public function indexWeb(){
        return view('web.index');
    }

    public function nextSeminar(){
        return view('web.static.proximoseminario');
    }

    public function historyWeb(){
        return view('web.static.nuestrahistoria');
    }

    public function aboutUs(){
        return view('web.static.aboutus');
    }

    public function allSeminar(){
        $seminarList = Seminar::orderBy('year','desc')->get();
        return view('web.seminar.all', ['seminarList'=>$seminarList]);
    }

    public function idSeminar($id){
        $s = Seminar::find($id);
        $acta = Document::where("seminar_id", $id)->where("mandatory","1")->get()[0]??null;
        $p = Presentation::where("seminar_id", $id)->get();

        $data['seminar'] = $s;
        $data['presentationList'] = $p;
        $data["acta"] = $acta->dir??0;


        return view('web.seminar.show', $data);
    }

    public function allPresentation(){
        $presentationList = Presentation::all();
        $yearList = Seminar::orderBy('year','desc')->select('year', 'location')->get();

        $data['yearList'] = $yearList;
        $data['presentationList'] = $presentationList;

        return view('web.presentation.all', $data);
    }

    public function idPresentation($id){
        $presentation = Presentation::find($id);
        $doc = Document::where("presentation_id", $id)->get()[0]??null;
        
        $data['doc'] = $doc;
        $data['presentation'] = $presentation;

        return view('web.presentation.show', $data);
    }

   

}
