<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Account extends Model
{
  use HasFactory;
    /**
     * @inheritDoc
     */
    protected $guarded = [];


  /**
     * Get consumer.
     *
     * @return HasOne
     */
    public function consumer(): HasOne
    {
        return $this->hasOne(Consumer::class);
    }
}
