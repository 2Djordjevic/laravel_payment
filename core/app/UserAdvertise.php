<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAdvertise extends Model
{
    protected $table = 'user_advertises';
    protected $fillable = [
        'user_id',
        'date',
        'add_id',
        'status',
    ];

    public function advertise()
    {
        return $this->hasOne(Advertise::class, 'id', 'add_id')->withDefault();
    }

    public function member()
    {
        return $this->hasOne(User::class, 'id', 'user_id')->withDefault();
    }
}
