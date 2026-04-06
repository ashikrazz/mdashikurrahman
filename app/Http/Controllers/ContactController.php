<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|numeric',
            'subject' => 'required|string|max:255',
            'budget' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::send('emails.contact', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'budget' => $request->budget,
            'msg' => $request->message,
        ], function ($mail) use ($request) {
            $mail->to('ashikurrahman173219@gmail.com')
            ->subject('New Contact Form: '.$request->subject);
        });

        // Return back with success message
        return back()->with('success', 'Thank you for reaching out. I have received your message and will get back to you shortly.');
    }
}
