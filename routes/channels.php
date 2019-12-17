<?php
use App\Group;
use Illuminate\Support\Facades\Broadcast;
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return ($user->_id) ===  $id;
});

Broadcast::channel('groups.{group}', function ($user, Group $group) {

    return ($group->hasUser($user->_id));
});

