<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class patient extends Model
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['name','Address'];
    public $fillable= ['email','Password','age','Phone','Gender','Blood_Group'];

}
