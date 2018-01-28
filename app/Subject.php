<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'sub_id', 'name',
    ];

    public function students(){
        return $this->belongsToMany(Student::class);
    }
}
