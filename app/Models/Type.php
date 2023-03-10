<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'type'
    ];

    protected $guarded = [];

    protected $table = 'types';

    public $timestamps = false;

    public function artistTypes(){
        return $this->hasMany(ArtistType::class);
    }
}
