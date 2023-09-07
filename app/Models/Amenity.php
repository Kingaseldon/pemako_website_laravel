<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;

    protected $fillable = ['amenity']; // Add 'name' to the fillable attributes

    public function accomodation()
    {
        return $this->belongsTo(Accomodation::class, 'accomodation_id');
    }
}
