<?php

namespace App\Models\admin;

use App\Models\Doctor\Doctor;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Database\Factories\SectionFactory;

class section extends Model
{
    use HasFactory;

    use Translatable;

    public $translatedAttributes = ['name', 'description'];
    protected $fillable = ['author','name','description'];

  public function Doctors()
  {
    return $this->hasMany(Doctor::class);
  }
}
