<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EarthLink extends Model
{
    use HasFactory;
    protected $fillable = [
            'fname',
            'phone',
            'email',
            'region_id',
            'city',
            'family_number',
            'profession',
            'complex_id',
            'academic_achievement',
            'marital_status',
            'best_payment',
            'estate_type',
            'area',
            'location',
            'purchase_purpose',
            'payment_budget',
            'budget'
    ];


    public function complex()
    {
        return $this->belongsTo(Complex::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
