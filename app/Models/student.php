<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guard = 'student';
    protected $table = 'students';
    protected $primaryKey = 'student_id';
    protected $fillable = [
        'student_id',
        'firstname',
        'middlename',
        'lastname',
        'course',
        'yearlevel_id',
        'email_add',
        'contact_num',
        'gender',
        'campus_id',
        'address',
        'date_of_birth',
        'status',
        'evaluation',
        'username',
        'password',
        'updated_at',
        'created_at'
    ];

    public function campus() {
        return $this->hasMany('App\Models\Campus', 'campus_id');
    }
  
}

