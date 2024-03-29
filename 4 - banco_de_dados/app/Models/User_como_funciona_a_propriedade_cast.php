<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        'name',
        'email',
        'password',
        'tags'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    /*
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'string',
	    'created_at' => 'date:d/m/Y H:i:s',
        'tags' => 'array'
    ];
    */

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'string',
	    'created_at' => 'date:d/m/Y H:i:s',
        'tags' => 'collection'
    ];

    public static function whereIdGreaterThan(int $id) {
        return static::where('id', '>', $id);
    }

    //Uso do scope com $query
    public static function scopeWhereIdGreaterThan2($query, int $id) {
        return $query->where('id', '>', $id);
    }
}
