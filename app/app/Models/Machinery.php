<?php

namespace App\Models;

use App\Models\Enums\MachineryBrandEnum;
use Illuminate\Database\Eloquent\Model;

class Machinery extends Model
{
    protected $fillable = [
        'eco',
        'serial',
        'brand',
        'model',
        'description',
        'horometer',
        'model_year'
    ];

    protected $casts = [
        'brand' => MachineryBrandEnum::class,
    ];

    public function machineryAsignation(){
        return $this->hasMany(MachineryAssignation::class);
    }
}
