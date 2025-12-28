<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected $fillable = [
        'code',
        'name',
        'description',
    ];

    public function role(){
        return $this->hasMany(Role::class);
    }
}
