<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'Category_id');
    }

    public function producer()
    {
        return $this->belongsTo(Producer::class, 'Producer_id');
    }

    public function images()
    {
        return $this->belongsToMany(Image::class,'Product_has_Image');
    }

    public function description()
    {
        return $this->belongsTo(Description::class,'Description_id');
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class,'Product_has_Attribute');
    }
    public function values()
    {
        return $this->belongsToMany(Value::class,'Product_has_Attribute');
    }
}
