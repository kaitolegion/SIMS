<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Campus extends Model
{
    protected $primaryKey = 'campus_id';
    protected $table = 'campus';
    protected $fillable = [
        'campus_name'
    ];

    public function student() {
        return $this->hasMany('App\Models\student', 'student_id');
    }
}
