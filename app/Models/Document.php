<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class Document extends Model{
    
    protected $fillable = array('id','type', 'seminar_id','presentation_id');  

    public function seminar(){
        return $this->belongsTo(Seminar::class);
    }

    public function presentation(){
        return $this->belongsTo(Presentation::class);
    }
    
    public function myrequest() {
        return $this->hasOne(Myrequest::class); 
    }

    public static function fileUpload(Request $r){
        $r->validate(['file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048']);

        if($r->file()) {
            $fileName = time().'_'.$r->file->getClientOriginalName();

            switch ($r->type) {
                case -1:
                    $filePath = 'TEMP';
                    break;
                case 1:
                    $filePath = 'PDFS';
                    break;
                case 2:
                    $filePath = 'PPTS';
                    break;
                case 3:
                    $filePath = 'PHOTOS';
                    break;
            }
        
            $r->file('file')->move($filePath, $fileName);

            return $filePath."/".$fileName;
        }else{
            return false;
        }
    }

    public static function fileDelete($path){
        if (File::exists($path)) {
            File::delete($path);
            return true;
        }else{
            return false;
        }

    }

    public static function fileMove($path, $typeBefore, $typeNew){
        if (File::exists($path)) {
            switch ($typeNew) {
                case -1:
                    $dir = 'TEMP';
                    break;
                case 1:
                    $dir = 'PDFS';
                    break;
                case 2:
                    $dir = 'PPTS';
                    break;
                case 3:
                    $dir = 'PHOTOS';
                    break;
            }


            switch ($typeBefore) {
                case -1:
                    $pathFinal= str_replace("TEMP", $dir, $path);
                    break;
                case 1:
                    $pathFinal= str_replace("PDFS", $dir, $path);
                    break;
                case 2:
                    $pathFinal= str_replace("PPTS", $dir, $path);
                    break;
                case 3:
                    $pathFinal= str_replace("PHOTOS", $dir, $path);
                    break;
            }
            File::move($path,$pathFinal);

            return $pathFinal;
        }else{
            return false;
        }

    }
    
    use HasFactory;
}
