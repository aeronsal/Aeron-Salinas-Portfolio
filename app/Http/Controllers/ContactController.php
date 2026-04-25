<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        Mail::to('aeron.salinas@gmail.com')->send(new ContactFormMail($validatedData));

        // Tell Laravel to return JSON if it detects an AJAX request
        if ($request->wantsJson()) {
            return response()->json(['success' => 'Thank you! Your message has been sent successfully. I will get back to you as soon as possible.']);
        }

        // Fallback for standard submission
        return back()->with('success', 'Thank you! Your message has been sent successfully. I will get back to you as soon as possible.');
    }
}
