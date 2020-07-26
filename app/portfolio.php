<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $table = 'portfolio';
    protected $fillable = ['nama_project', 'gambar', 'slug', 'kategori'];
}
