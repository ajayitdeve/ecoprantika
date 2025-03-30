<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{

    public function index(){
        return view('admin.contact.index',['contacts'=>Contact::orderBy('id','desc')->get()]);
    }
    public function sendmail(Request $request)
    {
      $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Contact::create($data);
        new ContactFormMail($data);

        //send mail
        Mail::to($request->email)->send(new ContactFormMail($data));
        //Session::flash('message','Thanks for Connection us');

        return to_route('thanks');


    }

    public function thanks()
    {
        return view('website.thanks');
    }


}
