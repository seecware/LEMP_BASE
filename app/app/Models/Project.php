<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'contry',
        'state',
        'municipality',
        'location',
    ];

    public function projectAsignations(){
        return $this->hasMany(ProjectAssignation::class);
    }
}
