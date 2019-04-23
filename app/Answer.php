<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	protected $fillable = ['question', 'tes_id', 'given_answer', 'true_answer'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
