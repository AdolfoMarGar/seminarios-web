<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentation extends Model{

    protected $fillable = array('id','subject','title', 'seminar_id');  

    public function documents(){
        return $this->hasMany(Document::class);
    }

    public function seminar(){
        return $this->belongsTo(Seminar::class,);
    }

    public function speaker(){
        return $this->belongsToMany(Speaker::class, );
    }
    
    use HasFactory;
}
