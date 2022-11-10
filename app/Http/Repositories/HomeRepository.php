<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\HomeInterface;
use App\Models\Meal;

class HomeRepository implements HomeInterface
{

    public function index()
    {
        $meals = Meal::all();
        return view('EndUser.pages.index', compact('meals'));
    }

    public function menu()
    {
        dd('Welcome Menu');
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
