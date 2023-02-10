<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'description',
        'poster_url',
        'location_id',
        'bookable',
        'price'
    ];

    protected $guarded = [];

    protected $table = 'shows';

    public $timestamps = false;

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function artistTypeShows(){
        return $this->hasMany(ArtistTypeShow::class);
    }

    public function representations(){
        return $this->hasMany(Representation::class);
    }
}
