<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory;

    protected $fillable = [
        'locality',
        'postal_code'
    ];

    protected $guarded = [];

    protected $table = 'localities';

    public $timestamps = false;

    public function locations(){
        return $this->hasMany(Location::class);
    }
}
