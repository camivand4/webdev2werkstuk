<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'title',
        'email',
        'firstname',
        'lastname',
        'address',
        'postal_code',
        'city',
        'province'
    ];
    //
}
