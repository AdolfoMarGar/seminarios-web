<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presentation;

class AjaxController extends Controller{
    public function selectAjax(Request $request){
        $seminar_id = $request->input('seminar_id');
        $response = Presentation::where("seminar_id", $seminar_id)->get()??null;

        
    
        return response()->json($response);
    }
}
