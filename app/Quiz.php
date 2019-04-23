<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
	protected $fillable=['title','question_length','uniqueid','time'];

    public function questions(){
    	return $this->hasMany(Question::class);
    }

    // public function answers(){
    //     return $this->hasMany('App\Answer');
    // }
}
