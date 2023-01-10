<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function Seminar(){
        return $this->belongsTo(Seminar::class);
    }
    use HasFactory;
}
