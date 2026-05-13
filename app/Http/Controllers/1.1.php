<?php
namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        
        $messages = Message::latest()->get();
        
        return view('guestbook', compact('messages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required|string',
        ]);
        Message::create($validated);

        return redirect()->back()->with('success', 'Сообщение успешно сохранено!');
    }
}