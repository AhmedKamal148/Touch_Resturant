<?php

namespace App\Http\Repositories\EndUser;

use App\Models\ContactUs;
use App\Http\Interfaces\EndUser\ContactUsInterface;

class ContactUsRepository implements ContactUsInterface
{
    public function __construct(
        private ContactUs $contact
    ) {
    }

    public function store($request)
    {
        $this->contact::create($request->validated());

        toast('The message has been sent successfully.', 'success');

        return back();
    }
}
