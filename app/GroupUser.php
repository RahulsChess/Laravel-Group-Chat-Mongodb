<?php

namespace App;
use App\User;
use Jenssegers\Mongodb\Eloquent\Model as Model;
use App\Group;
class GroupUser extends Model
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'group_user';
    protected $fillable = ['user_id','group_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function group()
    {
        return $this->belongsTo(Group::class);
    }


}
