<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'test_id', 'uniqueid', 'score','user_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
