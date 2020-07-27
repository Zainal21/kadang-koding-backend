<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    protected $table = 'setting';
    protected $fillable = ['Nama_perusahaan', 'tagline', 'deskripsi', 'email', 'phone', 'url_website', 'logo', 'Hero_cover'];
}
