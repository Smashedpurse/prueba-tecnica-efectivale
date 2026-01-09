<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $newMessage = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'date' => now()->format('Y-m-d H:i:s'),
        ];

        $route = storage_path('app/messages.json');

        if (!file_exists($route)) {
            file_put_contents($route, json_encode([]));
        }

        $messages = json_decode(file_get_contents($route), true);
        $messages[] = $newMessage;

        file_put_contents($route, json_encode($messages, JSON_PRETTY_PRINT));


        return response()->json([
            'success' => true,
            'message' => 'Registro guardado correctamente'
        ]);
    }

    public function records()
    {
        $route = storage_path('app/messages.json');

        $messages = [];

        if (file_exists($route)) {
            $messages = json_decode(file_get_contents($route), true);
        }

        return view('records', compact('messages'));
    }
}
