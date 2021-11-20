<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\TinTuyenDung;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
        'provider',
        'provider_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function tintuyendungs()
    {
        return $this->hasMany(TinTuyenDung::class);
    }

    public function tintimviecs()
    {
        return $this->hasMany(TinTimViec::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function ykiennguoidungs()
    {
        return $this->hasMany(YKienNguoiDung::class);
    }
}
