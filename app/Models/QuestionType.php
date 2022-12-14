<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionType extends Model
{
    use HasFactory;

    protected $guarded = ['*'];

    public function singleQuestion()
    {
        return $this->hasMany(SingleQuestion::class, 'question_type_id', 'id');
    }
}
