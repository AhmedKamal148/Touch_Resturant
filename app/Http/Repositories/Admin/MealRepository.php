<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\MealInterface;
use App\Http\Traits\handelImage;
use App\Http\Traits\MealTrait;
use App\Models\Meal;
use RealRashid\SweetAlert\Facades\Alert;


class MealRepository implements MealInterface
{
    private $mealModel;

    use handelImage, MealTrait;

    public function __construct(Meal $meal)
    {
        return $this->mealModel = $meal;
    }

    public function index()
    {
        $meals = $this->getAllMeals(5);
        return view('Admin.meal.index', compact('meals'));
    }

    public function create()
    {
        return view('Admin.meal.create');
    }

    public function store($request)
    {
        $data_request = $request->except('image');
        $data_request['image'] = $this->image_func($request->image, 'meals', null);

        $this->mealModel->create($data_request);

        Alert::toast('Create Meal Successfully', 'success');
        return redirect(route('admin.meal.index'));
    }

    public function edit($meal)
    {
        $meals_time = ['breakfast', 'lunch', 'dinner'];
        return view('Admin.meal.edit', compact('meals_time', 'meal'));
    }

    public function update($request, $meal)
    {
        if ($request->image) {
            $data_request = $request->except('image');
            $data_request['image'] = $this->image_func($request->image, 'meals', $meal->image);

        } else {
            $data_request['image'] = $meal->image;
        }

        $meal->update($data_request);
        Alert::toast('Update Meal Successfully', 'success');
        return redirect()->route('admin.meal.index');
    }

    public function destroy($meal)
    {
        $this->delete_Images_From_Disk($meal->image, 'meals');
        $meal->delete();
        Alert::toast('Delete Meal Successfully', 'Danger');
        return redirect()->route('admin.meal.index');

    }


}
