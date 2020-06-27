<?php

namespace App\Http\Controllers\admin;
use Redirect;
use Response;
use App\Models\ContactUs;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('frontEnd.pages.contact');
    }
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ],
        [
            'name.required' => 'The Name Field Is Required',
            'email.required' => 'The Email Field Is Required',
            'subject.required' => 'The Subject Field Is Required',
            'message.required' => 'The Message Field Is Required'
        ]);
        
        $data = array(
            'name_data' => $request->name,
            'email_date' => $request->email,
            'subject_deta' => $request->subject,
            'message_data' => $request->message
        );

        Mail::to('azharraihan6969@gmail.com')->send(new ContactUsMail($data));
        ContactUs::create($request->all());
        Toastr::success('Your Message Send Successfully','success');
        return redirect()->back()->with('success', 'Your message successfully sent');
    }

    public function contactAdmin()
    {
        $contacts = ContactUs::all();
        return view('admin.dashboard.contact',compact('contacts'));
    }

    public function contactShow($id)
    {
        $contact = ContactUs::findOrFail($id);
        return view('admin.dashboard.contact_show',compact('contact'));
    }

    public function contactDelete($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->delete();
        return redirect()->back();
    } 
}
