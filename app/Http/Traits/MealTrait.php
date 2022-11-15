<?php

namespace App\Http\Traits;

trait MealTrait
{
    private function getAllMeals($number_of_rows)
    {
        return $this->mealModel::paginate($number_of_rows);
    }

    private function getMealById($meal_id)
    {
        return $this->mealModel::findOrFail($meal_id);
    }
}
