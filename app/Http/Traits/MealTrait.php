<?php

namespace App\Http\Traits;

trait MealTrait
{
    private function getAllMeals()
    {
        return $this->mealModel::paginate(5);
    }

    private function getMealById($meal_id)
    {
        return $this->mealModel::findOrFail($meal_id);
    }
}
