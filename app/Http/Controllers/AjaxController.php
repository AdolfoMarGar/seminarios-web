<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presentation;
use App\Models\Seminar;

class AjaxController extends Controller{
    public function selectAjax(Request $request){
        $seminar_id = $request->input('seminar_id');
        $response = Presentation::where("seminar_id", $seminar_id)->get()??null;

        return response()->json($response);
    }

    public function buscadorSeminar(Request $request){
       
        $type = $request->input('type');
         $busqueda = $request->input('busqueda');
       switch ($type) {
            case '1':
                $response = Seminar::where('year', 'like', '%'.$busqueda.'%')->get();                
                break;
            case '2':
                $response = Seminar::where('location', 'like', '%'.$busqueda.'%')->get(); 
                break;
            case '3':
                $response = Seminar::where('hosts', 'like', '%'.$busqueda.'%')->get(); 
                break;
        } 

        return response()->json($response);
    }

    public function buscadorPresentation(Request $request){
        $yearList = Seminar::orderBy('year','desc')->select('year', 'location')->get();
        $type = $request->input('type');
        $busqueda = $request->input('busqueda');
        switch ($type) {
            case '1':
                $response = Presentation::where('subject', 'like', '%'.$busqueda.'%')->get();                
                break;
            case '2':
                $response = Presentation::where('title', 'like', '%'.$busqueda.'%')->get();                
                break;
            case '3':
                $response = Presentation::where('keywords', 'like', '%'.$busqueda.'%')->get();                
                break;
            case '4':
                #falta hacer query busqueda de la tabla relacionada por modelo speaker
                $response = Presentation::where('keywords', 'like', '%'.$busqueda.'%')->get();                
                break;
        }
        $data['yearList']= $yearList;
        $data['response']=$response;

        return response()->json($data);
    }
}
