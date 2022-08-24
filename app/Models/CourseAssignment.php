<?php

namespace App\Models;
use App\Models\Course;
use App\Models\Assignment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseAssignment extends Model
{
    use HasFactory;
    public $table = 'course_assignment';
    public $timestamps = true;
    protected $fillable = ['id', 'course_id', 'assignment_id'];

    public function assign()
    {
        return $this->belongsTo(Assignment::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
