<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{

    public function submit(Request $request) {
        
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        Message::create($validate); 

        return redirect('/')->with('success', 'Message Sent');
    
    }

    public function getMessages() {

        $messages = Message::all();

        return view('messages')->with('messages', $messages);

    }


}
