<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
	public function submit(Request $request)
	{
		$this->validate($request,[

			'message' => 'required',
			'email' => 'required'


		]);

		$message = new Message;
		$message->message = $request->input('message');
		$message->email = $request->input('email');
		$message->save();

		return redirect('/');


		

	}

	public function getMessage()
		{
			$messages = Message::all();
			return view('basic.message')->with('messages',$messages);
		}
    //
}
