<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contacts_controller extends Controller
{
    //return all contacts
    public function allContacts(){
        $contact1 = (object) [
            "Name" => "Omar",
            "Email" => "o@gmail.com",
            "Contacts" => 0123
        ];
        $contact2 = (object) [
            "Name" => "Mark",
            "Email" => "mk@gmail.com",
            "Contacts" => 9240
        ];
        $contact3 = (object) [
            "Name" => "Liam",
            "Email" => "Li@gmail.com",
            "Contacts" => 1263
        ];

        $contacts = (object) [$contact1, $contact2, $contact3];
        return view('contacts')->with('contacts', $contacts)->with('page_name', 'Contact');
    }
}
