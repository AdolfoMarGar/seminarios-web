<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
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
    
    use HasFactory;
}
