<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Auth;
use App\Chat;
use App\Message;
class messageController extends Controller
{
    public function index($id)
    {
    	$message=DB::table('chats')
    	->join('messages','messages.id','=','chats.message_id')
    	->where('sender_id','=',Auth::user()->id)
    	->where('receiver_id','=',$id)
    	->orWhere('sender_id','=',$id)
    	->where('receiver_id','=',Auth::user()->id)
    	->get();




        $messages=DB::table('chats')
        ->join('messages','messages.id','=','chats.message_id')
        ->where('is_last','=',1)
        ->where(function($q) {
        $q->where('sender_id','=',Auth::user()->id)
        ->orWhere('receiver_id','=',Auth::user()->id);
        })
        ->get();
    	

    	// SELECT * from chats INNER JOIN messages ON messages.id=chats.message_id WHERE (`sender_id` = 1 AND `receiver_id` = 5) or ( `sender_id` = 5 AND `receiver_id` = 1)
    
    	// ->get();

    	return view('content.message',compact('id','message','messages'));
    }

    public function send(Request $request)
    {
    	$new=new Message();
    	$new->message=$request->newMessage;
    	if ($new->save()) {
    		DB::table('chats')->where('sender_id','=',Auth::user()->id)
    												->where('receiver_id','=',$request->reciever_id)
    												->orWhere('sender_id','=',$request->reciever_id)
    												->where('receiver_id','=',Auth::user()->id)	
    												->update(['is_last' => 0] );
    		$chat=new Chat();
    		$chat->sender_id=Auth::user()->id;
    		$chat->receiver_id=$request->reciever_id;
    		$chat->message_id=$new->id;
    		$chat->is_last=1;
    		$chat->save();
    	}
    	return back() ;
    }

    public function viewAllMessages()
    {
    	$messages=DB::table('chats')
    	->join('messages','messages.id','=','chats.message_id')
    	->where('is_last','=',1)
    	->where(function($q) {
        $q->where('sender_id','=',Auth::user()->id)
    	->orWhere('receiver_id','=',Auth::user()->id);
    	})
    	->get();
    	return view ('content.messages',compact('messages'));
    }
}
