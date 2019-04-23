<?php

namespace App;

use App\Quiz;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['question', 'option1', 'option2', 'option3', 'option4', 'answer', 'quiz_id'];

    public function quiz(){
    	return $this->belongsTo(Quiz::class, 'quiz_id');
    }
}
