<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    protected $fillable = array('id','subject','dir', 'seminars_id', 'lastname', 'email');  

    public function seminar(){
        return $this->belongsTo(Seminar::class);
    }
    public function speaker(){
        return $this->belongsTo(Speaker::class);
    }
    use HasFactory;
}
