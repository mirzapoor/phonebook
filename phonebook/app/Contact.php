<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name','lastname','mobile','address','email'];

    public function contact(){
        return $this->belongsTo(Contact::class);
    }
}
