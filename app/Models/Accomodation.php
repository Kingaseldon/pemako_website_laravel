<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accomodation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'description', 'more_description']; // Add 'name' to the fillable attributes

    public function amenities()
    {
        return $this->hasMany(Amenity::class, 'accomodation_id');
    }
    public function sliders()
    {
        return $this->hasMany(Slider::class, 'accomodation_id');
    }
}
