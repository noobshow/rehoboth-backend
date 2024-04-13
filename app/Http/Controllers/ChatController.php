<?php

namespace App\Http\Controllers;

use App\Events\OnMessage;
use App\Models\Message;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{

    public function sendMessage(Request $request): JsonResponse
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        try {
            $message = new Message();
            $message->body = $request->message;
            $message->user_id = auth()->id(); // Assuming the user is authenticated
            $message->save();

            // Broadcast the message
            broadcast(new OnMessage($message->load('user')))->toOthers();
            // event(new OnMessage($message->load('user')));
        } catch (Exception $e) {
            Log::error('Error occurred whiles creating a message', [
                'file' => $e->getFile(),
                'code' => $e->getCode(),
                'message' => $e->getMessage(),
            ]);

            return response()->json([
                'status' => false,
                'msg' => 'Error creating message',
            ], 500);
        }

        return response()->json(['status' => true]);
    }

    public function fetchMessages()
    {
        $lastMessageId = auth()->user()->last_message_id?? 0;
        $messages = [];
        if($lastMessageId > 0) {
            $messages = Message::where('id', '>', $lastMessageId)->with('user')->get();
        } else {
            // read Messages sent within the last 24 hours or a maximum of 100 Messages
            // $messages = Message::where('user_id', auth()->id())->latest()->take(100)->with('user')->get();
            $messages = Message::with('user')->get(); // TODO include user nickname
        }
        // $lastMessageByUser = Message::where('user_id', auth()->id())->latest()->first();
        //get last message ID and time
        // $lastMessageId = $lastMessageByUser? $lastMessageByUser->id : 0;
        // $lastMessageTime = $lastMessageByUser? $lastMessageByUser->created_at : 0;
        // //get messages
        // $messages = Message::with('user')->where('id', '>', $lastMessageId)->get(); // TODO include user info - nickname
        // //get messages
        // $messages = Message::with('user')->where('created_at', '>', $lastMessageTime)->get(); // TODO include user info - nickname
        // //get messages
        // $messages = Message::with('user')->get(); // TODO include user info - nickname

        // return response()->json(['messages' => $messages]);
        // $messages = Message::with('user')->get(); // TODO include user info - nickname

        return response()->json($messages);
    }
}
