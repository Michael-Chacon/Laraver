<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' =>'required',
            'mensaje' => 'required|min:3'
        ]);
        Mail::to('michaelchacon@gmail.com')->queue(new MessageReceived($message));
        // return new MessageReceived($message);
        return 'Mensaje enviado';
    }

}
