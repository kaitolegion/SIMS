<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $guard = 'faculty';
    protected $table = 'faculty';
    protected $primaryKey = 'faculty_id';

    protected $fillable = [
        'faculty_id',
        'firstname',
        'middlename',
        'lastname',
        'email_add',
        'contact_num',
        'gender',
        'date_of_birth',
        'department',
        'position',
        'username',
        'password',
        'updated_at',
        'created_at'
    ];
}
