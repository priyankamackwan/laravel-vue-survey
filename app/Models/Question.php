<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
    ];

    public function Answer()
    {
        return $this->hasOne(Survey::class,'question_id');
    }

    public function AvgAnswer()
    {
        return $this->hasMany(Survey::class,'question_id');
    }
}
