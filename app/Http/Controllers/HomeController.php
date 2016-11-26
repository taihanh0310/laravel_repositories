<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StoreMusicService;
use Illuminate\Support\Facades\Mail;
use App\User;

class HomeController extends Controller
{
    private $storeSev;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(StoreMusicService $storeSev)
    {
        $this->storeSev = $storeSev;
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return redirect(route('store.index'));
        return View('home');
    }

    public function mail()
    {
        $user = User::find(1)->toArray();

        Mail::send('emails.mailEvent', $user, function($message) use ($user) {
            $message->to($user['email']);
            $message->subject('Mailgun Testing');
        });
        dd('Mail Send Successfully');
    }
}
