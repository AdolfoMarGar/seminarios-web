<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = array('id','username','password', 'realname', 'lastname', 'email');  

    use HasFactory;
}
