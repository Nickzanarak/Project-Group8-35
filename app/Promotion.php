<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $primaryKey = 'id_promotion';

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_users');
    }
}
