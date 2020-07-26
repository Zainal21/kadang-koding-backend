<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['judul', 'isi', 'status', 'photo', 'slug', 'author'];
}
