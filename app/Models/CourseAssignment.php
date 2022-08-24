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

    // metode 1 harus memberitahu foreignkey
    // karna nama function tidak sesuai nama database/foreign
    public function assign()
    {
        return $this->belongsTo(Assignment::class,'assignment_id');
    }
    // metode 2 tanpa menyebutkan foreignkey assignment_id
    // sudah otomatis karna nama function sesuai
    /* public function assignment() */
    /* { */
    /*     return $this->belongsTo(Assignment::class); */
    /* } */
    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
