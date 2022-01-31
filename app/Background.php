<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    protected $primaryKey = 'id_background';

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_users');
    }
}
