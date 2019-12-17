<?php
namespace App;

use App\Group;
use App\User;
use Jenssegers\Mongodb\Eloquent\Model as Model;

class Conversation extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'conversations';
    protected $fillable = ['message', 'user_id', 'group_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
