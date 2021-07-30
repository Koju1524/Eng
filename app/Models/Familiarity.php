<?php

namespace App\Models;

use App\Models\Vocabulary;
use Illuminate\Database\Eloquent\Model;

class Familiarity extends Model
{
    public function vocabulary()
    {
        return $this->hasMany(Vocabulary::class);
    }
}
