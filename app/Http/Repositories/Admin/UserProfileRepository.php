<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\UserProfileInterface;
use App\Http\Traits\ImageTraits;
use App\Http\Traits\UserTrait;
use App\Models\User;

class UserProfileRepository implements UserProfileInterface
{
    private $userModel;
    use ImageTraits, UserTrait;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function index()
    {
        return view('Admin.profile.index');
    }

    public function edit()
    {
        return view('Admin.profile.user_account_setting');
    }

    public function update($request)
    {
        $user = $this->getRecordById($this->userModel, auth()->user()->id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone
        ]);

        toast('User Was Updated !', 'success');
        return redirect(route('admin.profile.index'));
    }
}
