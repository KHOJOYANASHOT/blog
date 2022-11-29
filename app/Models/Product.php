<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
    public function getNameAttribute()
    {
        return ucfirst($this->title);
    }
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }
}
