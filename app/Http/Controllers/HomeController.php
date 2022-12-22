<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;
use App\Models\User;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $survay =  Survey::where('user_id', auth()->user()->id)->first();

        if(auth()->check() && auth()->user()->role == 'Admin' || $survay) {
            return view('home');
        }
        return view('survay');
    }

    public function survay()
    {
        return view('survay');
    }

    public function UserLists()
    {
        $ids =  Survey::distinct()->pluck('user_id')->all();
        $users = User::whereNotIn('id', $ids)->get();

        return view('userlist')->with('users', $users);
    }
}
