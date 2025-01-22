<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BookingTransaction extends Model
{
    protected $guarded = ['id'];

    public static function generateUniqueTrxId(){
        $prefix = 'AKT';
        do {
            $randomString = $prefix . mt_rand(1000, 9999);
        } while (self::where('booking_trx_id', $randomString)->exists());

        return $randomString;
    }

    public function workshop(): BelongsTo {
        return $this->belongsTo(Workshop::class);
    }

    public function participants(): HasMany {
        return $this->hasMany(WorkshopParticipant::class);
    }
}
