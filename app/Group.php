<?php
namespace App;
use App\User;
use App\GroupUser;
use Jenssegers\Mongodb\Eloquent\Model as Model;
class Group extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'groups';
    protected $fillable = ['name'];
    public function users()
    {
        return $this->belongsToMany(User::class,'group_user');
    }
    public function hasUser($user_id)
    {
        foreach ($this->users as $user) {
            if($user->id == $user_id) {
                return true;
            }
        }
    }

    public function group_user()
    {
        return $this->hasMany(GroupUser::class)->withTimestamps();
    }
}
