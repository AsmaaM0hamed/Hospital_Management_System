<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Insurance extends Model
{
    use HasFactory;

    use Translatable;

    public $translatedAttributes = ['name', 'notes'];
    protected $fillable = ['insurance_code','discount_percentage','Company_rate','name','notes'];
}
