<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = ['userid', 'message', 'replyto'];
    protected $table = 'chats';
    public $timestamps = true;
}
