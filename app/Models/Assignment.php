<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    public $table = 'assignment';
    public $timestamps = true;
    protected $fillable = ['id', 'assign_name'];


    public function assign() 
	{
		return $this->hasMany(CourseAssignment::class);
	}
}
