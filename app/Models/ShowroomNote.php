<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowroomNote extends Model
{
    use HasFactory;

    protected $fillable = ['show_room_id', 'note'];

    public function showRoom()
    {
        return $this->belongsTo(ShowRoom::class);
    }
}
