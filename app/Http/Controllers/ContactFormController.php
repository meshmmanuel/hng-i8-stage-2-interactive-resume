<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactForm\SubmitFormRequest;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function submitForm(SubmitFormRequest $request)
    {
        $form = new ContactForm();
        $form->name = $request->name;
        $form->email = $request->email;
        $form->message = $request->message;
        $form->save();
        
        return back()->with('success', 'Form submitted');
    }
}
