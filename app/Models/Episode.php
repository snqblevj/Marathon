<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    // An episode is related to a serie
    public function serie() {
        return $this->belongsTo("App\Serie", "serie_id");
    }
}
