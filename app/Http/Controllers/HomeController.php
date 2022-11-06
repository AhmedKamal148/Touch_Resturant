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

}
