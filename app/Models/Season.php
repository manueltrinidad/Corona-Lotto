<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    public function squad()
    {
        return $this->belongsTo('App\Models\Squad');
    }

    public function champions()
    {
        return $this->hasMany('App\Models\Champion');
    }
}
