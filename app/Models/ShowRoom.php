<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'phone',
        'region_id',
        'visit_date',
        'visit_number',
        'payment_method',
        'recognition_method',
        'family_number',
        'profession',
        'complex_id',      
];

    public function  showroomNote()
    {
        return $this->hasOne(ShowroomNote::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function complex()
    {
        return $this->belongsTo(Complex::class);
    }
}
