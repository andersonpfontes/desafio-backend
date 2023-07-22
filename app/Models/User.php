<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cpf',
        'email',
        'full_name',
        'password',
        'phone_number',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'cpf',
        'email',
        'full_name',
        'name',
        'username',
        'created_at',
        'updated_at',
        'password',
        'phone_number',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get consumer.
     *
     * @return HasOne
     */
    public function consumer(): HasOne
    {
        return $this->hasOne(Consumer::class);
    }

    /**
     * Get consumer.
     *
     * @return HasOne
     */
    public function seller(): HasOne
    {
        return $this->hasOne(Seller::class);
    }
}
