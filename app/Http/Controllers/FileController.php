<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Document;

class FileController extends Controller
{
    public function fileUpload(Request $r){
        $r->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);
        $document = new Document;
        if($r->file()) {
            $fileName = time().'_'.$r->document->getClientOriginalName();
            $filePath = $r->file('file')->storeAs('prueba', $fileName, 'public');
            $fileModel->name = time().'_'.$r->document->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
   }
}
