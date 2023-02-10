<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RepresentationUser extends Model
{
    protected $fillable = [
        'representation_id',
        'user_id',
        'places'
    ];

    protected $guarded = [];

    protected $table = 'representation_users';

    public $timestamps = false;
}
