<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoleNumber extends Model
{
    use HasFactory;

    public function damages()
    {
        return $this->hasMany(Damage::class);
    }

}
