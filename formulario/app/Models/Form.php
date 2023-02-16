<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model 
{
    use HasFactory;

    protected $dates = ['date'];
    protected $table = "forms";


    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    
}
