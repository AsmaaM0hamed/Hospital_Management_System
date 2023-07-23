<?php

namespace App\Models\Doctor;

use App\Models\admin\section;
use App\Models\Doctor\Image;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Database\Factories\Doctor\DoctorFactory;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Doctor extends Authenticatable
{

    use HasFactory;

    use Translatable;
    public $translatedAttributes = ['name'];
    protected $fillable = ['name','email','email_verified_at','password','phone'];

    protected static function newFactory()
    {
        return DoctorFactory::new();
    }

    public function section()
    {
        return $this->belongsTo(section::class);
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function Dr_Appointments()
    {
        return $this->hasMany(appointment::class);
    }
}
