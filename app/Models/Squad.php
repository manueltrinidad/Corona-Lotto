<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Squad extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function seasons()
    {
        return $this->hasMany('App\Models\Season');
    }

    public function predictions()
    {
        return $this->hasMany('App\Models\Prediction');
    }
}
