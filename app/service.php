<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $table = 'service';
    protected $fillable = [
        'nama_service',
        'icon',
        'deskripsi'
    ];
}
