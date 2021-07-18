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

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function part()
    {
        return $this->belongsTo(Part::class);
    }
    public function number()
    {
        return $this->belongsTo(Number::class);
    }
}
