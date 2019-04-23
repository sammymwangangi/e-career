<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['sub1', 'sub2', 'sub3', 'user_id'];

    public function users(){
        return $this->hasMany(User::class);
    }
}
