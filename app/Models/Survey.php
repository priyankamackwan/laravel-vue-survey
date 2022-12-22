<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'question_id',
        'answer'
    ];

    public function Question()
    {
        return $this->hasOne(Question::class,'id','question_id');
    }
}
