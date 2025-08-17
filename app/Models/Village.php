<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $fillable = ["name", "description", "location"];
    /** @use HasFactory<\Database\Factories\VillageFactory> */
    use HasFactory;

    public function eyces(){
        return $this->hasMany(Eyce::class);
    }
}
