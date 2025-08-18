<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eyce extends Model
{
    protected $fillable = ['name', 'skill', 'bio', 'village_id'];

    /** @use HasFactory<\Database\Factories\EyceFactory> */
    use HasFactory;

    public function village() {
        return $this->belongsTo(Village::class);
    }
}
