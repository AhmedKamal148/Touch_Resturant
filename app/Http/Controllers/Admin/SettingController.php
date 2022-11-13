<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingRequest;
use App\Http\Interfaces\Admin\SettingInterface;

class SettingController extends Controller
{
    public function __construct(
        private SettingInterface $settingInterface
    ) {
    }

    public function index()
    {
        return $this->settingInterface->index();
    }

    public function update(SettingRequest $request)
    {
        return $this->settingInterface->update($request);
    }
}
