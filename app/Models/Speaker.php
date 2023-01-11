<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    public function presentation(){
        return $this->belongsToMany(Presentation::class);
    }
    use HasFactory;
}
