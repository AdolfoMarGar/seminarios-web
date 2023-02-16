<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdata extends Model{

    protected $fillable = array('email','realname', 'lastname', 'region','entity');

    public function user(){
        return $this->hasMany(User::class);
    }
    
    use HasFactory;
}
