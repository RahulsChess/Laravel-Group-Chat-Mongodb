<?php

namespace App;
use App\Group;
use App\GroupUser;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Eloquent implements AuthenticatableContract, CanResetPasswordContract
{
    use AuthenticableTrait;
    use Notifiable;
    use CanResetPassword;

    protected $connection = 'mongodb';
    protected $collection = 'users';
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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function groups()
    {
        return $this->belongsToMany(Group::class,'group_user');
    }
    public function group_user()
    {
        return $this->hasMany(GroupUser::class)->withTimestamps();
    }
}
