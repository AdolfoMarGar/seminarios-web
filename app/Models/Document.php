<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = array('id','type','dir', 'seminar_id');  

    public function seminar(){
        return $this->belongsTo(Seminar::class);
    }
    use HasFactory;
}
