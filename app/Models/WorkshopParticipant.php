<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkshopParticipant extends Model
{
    protected $guarded = ['id'];

    public function workshop(): BelongsTo {
        return $this->belongsTo(Workshop::class, 'workshop_id');
    }

    public function bookingTransaction(): BelongsTo {
        return $this->belongsTo(BookingTransaction::class, 'booking_transaction_id');
    }
}
