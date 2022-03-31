<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected static function booted()
    {
        parent::boot();
        
        static::created(function ($model) {

            $model->slug = Str::slug($model->name);
            $model->save();
            
        });
    }
}
