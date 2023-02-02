<?php

namespace AbnDevs\Subscriptions\Tests\Models;

use AbnDevs\Subscriptions\Traits\HasSubscriptions;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasSubscriptions;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

}
