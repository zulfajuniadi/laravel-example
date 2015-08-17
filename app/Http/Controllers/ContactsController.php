<?php

namespace App\Http\Controllers;

use App\Contact;
use Input;
use App\Http\Requests\ContactsRequest;

class ContactsController extends Controller
{
    public function index()
    {
        return Contact::all()->load('country');
    }

    public function store(ContactsRequest $input)
    {
        return Contact::create($input->all());
    }

    public function update(ContactsRequest $input, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update($input->all());
        return $contact;
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return $contact;
    }
}