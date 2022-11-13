<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\MealInterface;
use App\Http\Requests\Admin\MealRequest;
use App\Models\Meal;

class MealController extends Controller
{

    private $mealInterface;

    public function __construct(MealInterface $meal)
    {
        $this->mealInterface = $meal;
    }

    public function index()
    {
        return $this->mealInterface->index();
    }

    public function create()
    {
        return $this->mealInterface->create();

    }

    public function store(MealRequest $request)
    {
        return $this->mealInterface->store($request);

    }

    public function edit(Meal $meal)
    {
        return $this->mealInterface->edit($meal);

    }

    public function update(MealRequest $request, Meal $meal)
    {
        return $this->mealInterface->update($request, $meal);

    }


    public function destroy(Meal $meal)
    {
        return $this->mealInterface->destroy($meal);

    }
}
