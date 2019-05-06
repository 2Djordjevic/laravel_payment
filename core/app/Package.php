<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'title',
        'price',
        'status',
        'click'
    ];

    public function detail()
    {
        return $this->hasMany(PackageDetail::class, 'package_id', 'id');
    }
}
