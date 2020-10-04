<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'title',
        'content',
        'deptauth',
        'deptid'
    ];

    protected $table = 'threads';

    public $timestamps = true;
}
