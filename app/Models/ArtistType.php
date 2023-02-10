<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistType extends Model
{
    protected $fillable = [
        'artist_id',
        'type_id'
    ];

    protected $guarded = [];

    protected $table = 'artist_types';

    public $timestamps = false;

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function artistTypeShows(){
        return $this->hasMany(ArtistTypeShow::class);
    }
}
