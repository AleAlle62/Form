<?php
use Illuminate\Support\Facades\Mail;
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
{

    $validatedData = $request->validate([
        'name' => 'required',
        'surname' => 'required',
        'message' => 'required',
        'photo' => 'image|max:2048',
    ]);


    $contact = new Contact();
    $contact->name = $request->name;
    $contact->surname = $request->surname;
    $contact->message = $request->message;

    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');
        $contact->photo = $photoPath;
    }

    $contact->save();


    Mail::send('emails.contact', ['contact' => $contact], function ($message) {
        $message->to('allegrini.alessio00@gmail.com', 'Your Name')
                ->subject('New Contact Message');
    });

    }
}
