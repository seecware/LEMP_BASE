<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MachineryAssignation extends Model
{
    protected $fillable = [
        'operator_id',
        'machinery_id',
        'rh_supervisor',
        'maintenance_coordinator',
        'details'
    ];

    public function personal(){
        return $this->belongsTo(Personal::class);
    }

    public function machinery(){
        return $this->belongsTo(Machinery::class);
    }
}
