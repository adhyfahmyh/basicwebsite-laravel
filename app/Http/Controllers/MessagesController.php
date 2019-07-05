<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        // return $request->input('name', 'email', 'message');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        
        //create a new message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //saved message
        $message->save();
        return redirect('/')-> with('success', 'Message Sent!');
    }
}
