<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $table = 'course';
    public $timestamps = true;
    protected $fillable = ['id', 'coursename',];


    public function idcourse() 
	{
		return $this->hasOne(CourseAssignment::class);
	}
}
