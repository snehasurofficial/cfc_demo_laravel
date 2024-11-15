<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Events\UserSaved;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $dispatchesEvents = [
        'saved' => UserSaved::class,
        'updated' => UserSaved::class,
    ];
    protected $fillable = [
        'prefixname',
        'firstname',
        'middlename',
        'lastname',
        'suffixname',
        'photo',
        'type',
        'username',
        'name',
        'email',
    ];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }
}
