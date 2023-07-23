<?php

namespace App\Models\Doctor;

use App\Models\Doctor\Doctor;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class appointment extends Model
{
    use HasFactory;

    protected $fillable=['time','date','status'] ;

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
