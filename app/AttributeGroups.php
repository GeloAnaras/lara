<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeGroups extends Model
{
    protected $table = 'Groups';
    public $timestamps = false;

    public function attribute()
    {
        return $this->hasMany(Attribute::class, 'Group_id');
    }
}
