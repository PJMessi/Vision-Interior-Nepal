<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

use App\Contact;
use App\Company;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();
        $company = Company::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->first();

        return view('pages.contact')->with([
            'title' => 'Contacts',
            'contacts' => $contacts,
            'company' => $company,
        ]);
    }

    public function message(Request $request){

        $this->validate($request,[
            'firstName' => 'required|min:5|max:35',
            'lastName' => 'required|min:5|max:35',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required'
        ]);


        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');

        $userMsg = new Message();
        $userMsg->firstName = $firstName;
        $userMsg->lastName = $lastName;
        $userMsg->email = $email;
        $userMsg->phone = $phone;
        $userMsg->message = $message;

        $userMsg->save();

        return redirect()->back()->with(['success'=>'Thank You, Message Successfully Sent.']);
    }
}
