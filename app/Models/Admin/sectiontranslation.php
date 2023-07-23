<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sectiontranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'description'];
}
