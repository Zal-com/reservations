<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation',
        'address',
        'website',
        'phone',
        'locality_id'
    ];

    protected $guarded = ['slug'];

    protected $table = 'locations';

    public $timestamps = false;

    public function locality(){
        return $this->belongsTo(Locality::class);
    }
}
