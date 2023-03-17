<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;
use App\Models\Presentation;
use App\Models\Document;
use App\Models\Myrequest;
use App\Models\User;

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

    #Seminarios
    public function allSeminar(){
        $seminarList = Seminar::orderBy('year','desc')->get();
        return view('web.seminar.all', ['seminarList'=>$seminarList]);
    }

    public function idSeminar($id){
        $s = Seminar::find($id);
        $acta = Document::where("seminar_id", $id)->where("mandatory","1")->get()[0]??null;

        $data['seminar'] = $s;
        $data["acta"] = $acta->dir??0;


        return view('web.seminar.show', $data);
    }

    #Presentaciones
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

    #peticiones
    public function allRequest(){
        $requestList = Myrequest::where("user_id",auth()->user()->id)->get()??null;
        $data['requestList']=$requestList;
        return view ('web.request.all', $data);
    }

    public function newRequest(){
        $s = Seminar::all();
        $data["seminarList"]= $s;

        $p = Presentation::where("seminar_id", $s[0]->id)->get()??null;
        $data["presentationList"]= $p;

        $data['myrequest']= null;

        return view('web.request.form', $data);
    }

    public function editRequest($id){
        $myrequest = Myrequest::find($id);
        $u = User::all();
        $s = Seminar::all();
        $p = Presentation::where("seminar_id", $s[0]->id)->get()??null;

        $data["userList"]= $u;
        $data["presentationList"]= $p;
        $data["seminarList"]= $s;
        $data['myrequest']= $myrequest;

        return view('web.request.form', $data);
    }

   

}
