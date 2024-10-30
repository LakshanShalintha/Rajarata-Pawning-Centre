<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email',
            'contactNumber' => 'required|numeric',
            'message' => 'required|string',
        ]);

        // Prepare the data to send in the email
        $data = [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'contactNumber' => $request->contactNumber,
            'messageBody' => $request->message,  // Renamed from 'message' to avoid conflict
        ];

        // Send the email
        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->to('@gmail.com')  // Set your recipient email address
            ->subject('New Contact Message from ' . $data['firstName']);
        });

        // Return a response or redirect
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
