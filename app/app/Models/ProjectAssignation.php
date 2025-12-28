<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectAssignation extends Model
{
    protected $fillable = [
        'project_id',
        'machinery_id',
        'fecha',
        'maintenance_manager',
        'comments'
    ];

    public function projects(){
        return $this->belongsTo(Project::class);
    }

    public function machinery(){
        return $this->belongsTo(Machinery::class);
    }
}
