<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkshopBenefit extends Model
{
    protected $guarded = ['id'];

    public function workshops(): HasMany {
        return $this->hasMany(Workshop::class);
    }
}
