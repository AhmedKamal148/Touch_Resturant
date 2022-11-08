<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\HomeInterface;

class HomeController extends Controller
{
    private $homeInterface;

    public function __construct(HomeInterface $homeInterface)
    {
        $this->homeInterface = $homeInterface;
    }

    public function index()
    {
        return $this->homeInterface->index();
    }

    public function menu()
    {
        return $this->homeInterface->menu();
    }

    public function gallery()
    {
        return $this->homeInterface->gallery();
    }

    public function chefs()
    {
        return $this->homeInterface->chefs();
    }

    public function contact()
    {
        return $this->homeInterface->contact();
    }

}
