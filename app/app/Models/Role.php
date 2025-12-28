<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'code',
        'departament_id',
        'name',
        'hierarchy',
        'salary',
        'category',
        'rank',
        'permissions_group',
        'can_approve_machinery_assignations',
        'can_approve_projects',
        'active',
        'status'
    ];

    protected $casts = [
        'can_approve_machinery_assignations' => 'boolean',
        'can_approve_projects' => 'boolean',
        'active' => 'boolean'
    ];

    public function departament(){
        return $this->belongsTo(Departament::class);
    }

    public function personal(){
        return $this->hasMany(Personal::class);
    }
}
