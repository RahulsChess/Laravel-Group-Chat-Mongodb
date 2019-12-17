<?php
namespace App\Http\Controllers;
use App\Events\GroupCreated;
use App\Group;
use App\GroupUser;
use App\Auth;
use DB;
use Illuminate\Http\Request;
class GroupController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
    }

    public function store()
    {

        $group = Group::create(['name' => request('name')]);
        $groupId=$group->first()->_id;
        $users = collect(request('users'));
        $users->push(auth()->user()->_id);


        foreach($users as $user)
        {

            $group->users()->attach($user);
            GroupUser::create([
                'group_id'=> $groupId,
                'user_id'=>$user
            ]);
        }

        broadcast(new GroupCreated($group))->toOthers();

        return $group;
    }
}
