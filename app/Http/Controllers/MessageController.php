<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class MessageController extends Controller
{
    public function send(Request $request){
        $request->validate([
           'name'=>'required|string|max:255',
           'email'=>'required|email|max:255',
           'subject'=>'required|string|max:255',
            'message'=>'required|string|max:255'
        ]);
        $executed = RateLimiter::attempt('send-message:'.$request->get('email'),1,function () use ($request){
            Message::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ]);
        });
        if (!$executed){
            return response('Trop de demandes',429);
        }
       return response('OK',200);
    }
}
