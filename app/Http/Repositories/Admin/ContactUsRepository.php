<?php

namespace App\Http\Repositories\Admin;

use App\Models\ContactUs;
use App\Http\Interfaces\Admin\ContactUsInterface;

class ContactUsRepository implements ContactUsInterface
{
    public function __construct(
        private ContactUs $contactModel
    ) {
    }

    public function index()
    {
        $contactUs = $this->contactModel::paginate(10);

        return view('Admin.contact-us.index', compact('contactUs'));
    }

    public function show($contact)
    {
        return view('Admin.contact-us.show', compact('contact'));
    }
}
