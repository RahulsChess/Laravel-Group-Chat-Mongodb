<?php
namespace App\Http\Controllers;
use App\Group;
use App\User;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(auth()->user())
        {
            $groups = auth()->user()->groups;
        }

        $users = User::where('_id', '<>', auth()->user()->_id)->get();
        $user = auth()->user();
        return view('home', ['groups' => $groups, 'users' => $users, 'user' => $user]);
    }
}
