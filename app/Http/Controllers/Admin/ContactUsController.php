<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\ContactUsInterface;

class ContactUsController extends Controller
{
    public function __construct(
        private ContactUsInterface $contactInterface
    ) {
    }

    public function index()
    {
        return $this->contactInterface->index();
    }

    public function show(ContactUs $contact)
    {
        return $this->contactInterface->show($contact);
    }
}
