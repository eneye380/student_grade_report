<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'stud_id', 'first_name', 'middle_name', 'last_name', 'date_of_birth', 'class',
    ];

    public function subjects(){
        return $this->hasMany(Subject::class);
    }
}
