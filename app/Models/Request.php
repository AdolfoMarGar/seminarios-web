<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function user(){
        return $this->belongsToMany(User::class);
    }
    use HasFactory;
}
