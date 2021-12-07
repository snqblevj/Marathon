<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public $timestamps = false;
    use HasFactory;
    // An episode is related to a serie
    public function serie() {
        return $this->belongsTo("App\Serie", "serie_id");
    }
}
