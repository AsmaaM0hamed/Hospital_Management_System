<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patienttranslation extends Model
{
    use HasFactory;
    protected $fillable = ['name','Address'];
    public $timestamps = false;
}
