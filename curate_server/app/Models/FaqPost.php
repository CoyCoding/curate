<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqPost extends Model
{
    protected $fillable = [
        'question', 'answer',
    ];
}
