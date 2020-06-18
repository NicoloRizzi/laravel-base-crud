<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // Fillables
    protected $fillables = [
        'company_name',
        'company_description'
    ];
}
