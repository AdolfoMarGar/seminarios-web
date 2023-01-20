<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myrequest extends Model
{
    protected $fillable = array('id','text','year', 'type', 'dir', 'user_id');  

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function document(){
        return $this->belongsTo(Document::class);
    }
    use HasFactory;
}
