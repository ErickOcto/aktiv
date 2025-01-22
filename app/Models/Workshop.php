<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Workshop extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'started_at' => 'date',
        'time_at' => 'datetime:H:i',
    ];

    public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function benefits(): HasMany {
        return $this->hasMany(WorkshopBenefit::class);
    }

    public function participants(): HasMany {
        return $this->hasMany(WorkshopParticipant::class);
    }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function instructor(): BelongsTo {
        return $this->belongsTo(WorkshopInstructor::class, 'workshop_instructor_id');
    }
}
