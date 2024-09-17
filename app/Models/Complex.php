<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complex extends Model
{
    use HasFactory;
    protected $fillable = ['name','status'];


    public function earthLinks()
    {
        return $this->hasMany(EarthLink::class);
    }

    
    public function showrooms()
    {
        return $this->hasMany(ShowRoom::class);
    }
}
