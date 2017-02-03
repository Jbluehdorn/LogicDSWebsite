<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'id', 'bio', 'imageLocation', 'position', 'location', 'primary_phone_number', 'secondary_phone_number'
    ];
}
