<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model{

    protected $fillable = array('id','year','location', 'hosts'); 

    public function documents(){
        return $this->hasMany(Document::class);
    }

    public function presentation(){
        return $this->hasMany(Presentation::class);
    }
    
    use HasFactory;
}
