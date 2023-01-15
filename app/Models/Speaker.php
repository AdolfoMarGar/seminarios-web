<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $fillable = array('id','name','lastname','region');  

    public function presentation(){
        return $this->belongsToMany(Presentation::class);
    }
    use HasFactory;
}
