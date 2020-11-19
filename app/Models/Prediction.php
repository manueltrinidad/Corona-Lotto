<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    use HasFactory;

    public function squad()
    {
        return $this->belongsTo('App\Models\Squad');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
