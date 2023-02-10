<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtistTypeShow extends Model
{
    protected $fillable = [
        'artist_type_id',
        'show_id'
    ];

    protected $guarded = [];

    protected $table = 'artist_type_shows';

    public $timestamps = false;

    public function artistType(){
        return $this->belongsTo(ArtistType::class);
    }
}
