<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Mail\NotifyAdmin;
use Illuminate\Http\Request;
use App\Notifications\NewMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Notifications\Notification;

class ContactController extends Controller
{
    public function sendMessage(Request $request){
        // dd($request->all());
        
        $validation_result = $request->validate([
            "name" => 'regex:/^[a-zA-Z ]+$/|min:2|max:255',
            "email" => "required|email",
            "message" => "required"
        ]);

        if($validation_result){
            Contact::create($request->all());

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            

            Mail::send('emails.message', [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'msg' => $request->message
            ],
             function($mail) use($request){
                // $mail->from(env('MAIL_FROM_ADDRESS'), $request->name);
                $mail->from($request->email, $request->name);
                $mail->to('lamisyat@gmail.com')->subject('وصلتك رسالة جديدة للموقع');

            });


        
            return redirect()->back()->with('message',__('lang.contact_success_message'));
        }
        else{
            return redirect()->back()->withErrors($validation_result);
        }
        
    }
}
