<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    function index(){
        $contacts = Contact::get();
        return view('contact.index', compact('contacts'));
    }
    function store(){
        Contact::create([
            'name' => 'David'
        ]);
    }
}
