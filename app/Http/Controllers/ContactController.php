<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string',
        ]);

        Contact::create([
            'user_id' => auth()->id(), // Otomatis ambil user yang login
            'message' => $validated['message'],
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
