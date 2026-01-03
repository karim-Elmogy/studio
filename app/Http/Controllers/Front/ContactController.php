<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactPageSetting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $pageSettings = ContactPageSetting::getSettings();
        return view('front.contact.index', compact('pageSettings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $validated['status'] = 'pending';

        Contact::create($validated);

        return redirect()->back()->with('success', __('Your message has been sent successfully! We will contact you soon.'));
    }
}
