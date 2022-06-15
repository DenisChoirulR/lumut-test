<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    public $timestamps = false;
    protected $fillable = ['idpost', 'title', 'content', 'date', 'username'];

    public function akun()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }
}
