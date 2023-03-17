<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller{
    public function selectAjax(Request $request){
        /*$valor = $request->input('valor');
        return response()->json($valor);
        */
        $response = [
            'message' => 'prueba'
        ];
    
        return response()->json($response);
    }
}
