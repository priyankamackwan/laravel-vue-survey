<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'mobile',
        'addr_1',
        'addr_2',
        'postal_code',
        'state',
        'area',
        'education',
        'gender',
        'country',
        'region',
        'experience_design',
        'additional_detail',
    ];
}
