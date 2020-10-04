<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['userid', 'replyto', 'content', 'threadid'];
    protected $table = 'comments';
    public $timestamps = true;
}
