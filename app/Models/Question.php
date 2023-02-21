<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $appends = ['answer'];
    protected $fillable = [
        'question',
        'group_id',
        'course'
    ];

    public function getAnswerAttribute()
    {
        return 0;
    }
}
