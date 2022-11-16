<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\SettingInterface;

class SettingRepository implements SettingInterface
{
    public function index()
    {
        return view('Admin.home.settings');
    }

    public function update($request)
    {
        settings()->update($request->validated());

        toast('The setting has been updated successfully', 'success');

        return back();
    }
}
