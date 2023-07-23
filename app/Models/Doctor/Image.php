<?php

namespace App\Models\Doctor;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\Doctor\ImageFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }

    protected static function newFactory()
    {
        return ImageFactory::new();
    }
}
