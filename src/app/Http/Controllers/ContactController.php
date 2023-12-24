<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $contacts = Contact::all();

        $prevContact = session('contact_data');
        return view('index', compact('contacts', 'categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name' , 'gender' , 'email', 'phone-part1' ,'phone-part2' , 'phone-part3' ,'address' ,'building' , 'category_id' , 'detail']);

        $prevContact = session('contact_data', []);
        $contact = array_merge($prevContact, $contact);

        session(['contact_data' => $contact]);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contactData = $request->only(['first_name', 'last_name' , 'gender' , 'email', 'phone-part1' ,'phone-part2' , 'phone-part3' ,'address' ,'building' , 'category_id' , 'detail']);
        $contact=Contact::create($contactData);
        return view('thanks', compact('thanks'));
    }


}
