<?php

namespace App\Http\Interfaces\Admin;

interface UserProfileInterface
{
    public function index();
    public function edit();
    public function update($request);
}
