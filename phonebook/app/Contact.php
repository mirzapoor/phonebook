<?php

namespace App;
use Illuminate\Database\Eloquent\softDeletes;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
//  use softDeletes;
//  protected $dates =['deleted_at'];

    protected $fillable = ['name','lastname','mobile','address','email'];

    public function contact(){
        return $this->belongsTo(Contact::class);
    }
}
