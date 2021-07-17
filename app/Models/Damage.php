<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Damage extends Model
{
    use HasFactory;

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function hole_type()
    {
        return $this->belongsTo(HoleType::class);
    }
    public function body_part()
    {
        return $this->belongsTo(BodyPart::class);
    }
    public function hole_number()
    {
        return $this->belongsTo(HoleNumber::class);
    }
}
