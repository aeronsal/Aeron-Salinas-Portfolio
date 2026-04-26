<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        if (!empty($request->website_url)) {
            if ($request->wantsJson()) {
                return response()->json(['success' => 'Thank you! Your message has been sent successfully.']);
            }
            return back()->with('success', 'Thank you! Your message has been sent successfully.');
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:100|regex:/^[\pL\s\-]+$/u', 
            'email' => 'required|email:rfc,dns|max:255', 
            'message' => 'required|string|min:10|max:3000', 
        ]);

        $validatedData['name'] = strip_tags($validatedData['name']);
        $validatedData['message'] = strip_tags($validatedData['message']);

        Mail::to('aeron.salinas@gmail.com')->send(new ContactFormMail($validatedData));

        if ($request->wantsJson()) {
            return response()->json(['success' => 'Thank you! Your message has been sent successfully. I will get back to you as soon as possible.']);
        }

        return back()->with('success', 'Thank you! Your message has been sent successfully. I will get back to you as soon as possible.');
    }
}