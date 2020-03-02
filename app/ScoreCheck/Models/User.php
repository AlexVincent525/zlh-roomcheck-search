<?php

namespace App\ScoreCheck\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\ScoreCheck\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\App\ScoreCheck\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ScoreCheck\Models\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ScoreCheck\Models\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ScoreCheck\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ScoreCheck\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ScoreCheck\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
