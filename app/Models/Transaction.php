<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    /**
     * @inheritDoc
     */
    protected $guarded = [];

    /**
     * @inheritDoc
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * @inheritDoc
     */
    protected $appends = [
        'transaction_date',
    ];

    protected $casts = [
        'payee_id' => 'integer',
        'payer_id' => 'integer',
        'value' => 'decimal',
    ];

  /**
     * Get created_at.
     *
     * @return string
     */
    public function getTransactionDateAttribute(): string
    {
        return $this->attributes['created_at'];
    }
}
