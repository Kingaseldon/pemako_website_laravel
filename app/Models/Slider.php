<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [ 'slider']; // Add 'name' to the fillable attributes

    public function accomodation()
    {
        return $this->belongsTo(Accomodation::class, 'accomodation_id');
    }
}