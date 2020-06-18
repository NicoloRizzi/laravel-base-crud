<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // Fillables
    protected $fillable = [
        'company_name',
        'company_description'
    ];
}
