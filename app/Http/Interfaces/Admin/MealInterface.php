<?php

namespace App\Http\Interfaces\Admin;

interface MealInterface
{
    public function index();

    public function create();

    public function store($request);
    
    public function edit($meal);

    public function update($request, $meal);

    public function destroy($meal);

}