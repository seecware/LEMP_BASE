<?php

namespace App\Models;

use App\Models\Enums\GenderEnum;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $casts = [
        'gender' => GenderEnum::class,
    ];

    protected $fillable = [
        'name',
        'lastname',
        'curp',
        'nss',
        'phone_number',
        'email',
        'gender',
        'role_id',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function machineryAsignation(){
        return $this->hasMany(MachineryAssignation::class);
    }
    
}
