<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\OrderShipped;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendmail(Request $request, User $user)
    {
    	// $email = $request->email;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->save();
    	dispatch(new SendEmailJob($user))->delay(now()->addSeconds(10));
    	// Mail::to($user)->send(new OrderShipped());
    	return 'Successfully';

    	// $email = $request->email;
    	// $data = [
    	// 	'name' => $request->name,
    	// 	'email' => $request->email,
    	// ];
    	// mail::to($email)->send(new OrderShipped($data));
    	// return 'Email Send Successfully';
    }

    public function index()
    {
    	return view('index');
    }
}
