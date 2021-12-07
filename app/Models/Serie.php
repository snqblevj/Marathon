<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $timestamps = false;
    use HasFactory;

    // A serie has many episodes
    public function episodes() {
        return $this->hasMany("App\Episode", "serie_id");
    }

    // A serie has many comments
    public function comments() {
        return $this->hasMany("App\Comment", "serie_id");
    }



}
