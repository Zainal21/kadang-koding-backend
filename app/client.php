<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $table = 'client';
    protected $fillable = [
        'nama_partner','slug','logo'
    ];
}
