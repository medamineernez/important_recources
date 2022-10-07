<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification ;
use App\Notifications\helloWorldNotification;


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
        return view('home');
    }

    public function sendNotify(){
        $user=User::all();
        $details =[
          'greeting'=>'hi laravel developer',
          'body'=>'hello world',
          'actiontext'=>'hello world 2',
          'actionurl'=>'/',
          'lastline'=>'this is the last line',
        ];

        Notification::send($user, new helloWorldNotification($details));
        dd('done');

    }
}
