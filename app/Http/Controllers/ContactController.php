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

        $route = storage_path('app/message.json');

        if (!file_exists($route)) {
            file_put_contents($route, json_encode([]));
        }

        $mensajes = json_decode(file_get_contents($route), true);
        $mensajes[] = $newMessage;

        file_put_contents($route, json_encode($mensajes, JSON_PRETTY_PRINT));

        return response()->json([
            'success' => true,
            'message' => 'Mensaje guardado correctamente'
        ]);
    }
}
