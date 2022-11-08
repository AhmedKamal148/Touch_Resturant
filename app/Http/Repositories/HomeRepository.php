<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\HomeInterface;

class HomeRepository implements HomeInterface
{

    public function index()
    {
        return view('EndUser.pages.index');
    }

    public function menu()
    {
       dd('Welcome Menu');
    }

    public function gallery()
    {
        dd('Welcome gallery');
    }

    public function chefs()
    {
        dd('Welcome chefs');
    }

    public function contact()
    {
        dd('Welcome contact');
    }
}
