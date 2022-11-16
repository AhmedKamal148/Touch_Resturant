<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\UserProfileInterface;
use App\Http\Requests\Admin\user_profile\UserProfileRequest;

class UserProfileController extends Controller
{
    private $userModel;

    public function __construct(UserProfileInterface $user)
    {
        $this->userModel = $user;
    }

    public function index()
    {
        return $this->userModel->index();
    }

    public function edit()
    {
        return $this->userModel->edit();
    }

    public function update(UserProfileRequest $request)
    {
        return $this->userModel->update($request);
    }

}
