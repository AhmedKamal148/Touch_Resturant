<?php

namespace App\Http\Controllers\EndUser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EndUser\ContactUsRequest;
use App\Http\Interfaces\EndUser\ContactUsInterface;

class ContactUsController extends Controller
{
    public function __construct(
        public ContactUsInterface $contactInterface
    ) {
    }

    public function store(ContactUsRequest $request)
    {
        return $this->contactInterface->store($request);
    }
}
