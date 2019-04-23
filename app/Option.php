<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['option', 'correct', 'question_id'];

    public function question(){
    	return $this->belongsTo(Question::class, 'question_id');
    }
}
