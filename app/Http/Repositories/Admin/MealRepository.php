<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\MealInterface;
use App\Http\Traits\handelMealImage;
use App\Http\Traits\MealTrait;
use App\Models\Meal;
use RealRashid\SweetAlert\Facades\Alert;


class MealRepository implements MealInterface
{
    private $mealModel;

    use handelMealImage, MealTrait;

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
        $data_request = $request->except('image'); // Except Image From Data

        $image_name_after_hash = $this->hash_Image_Name($request->image); //Hash Image Name

        $this->save_Image_Into_Disk($request->image, $image_name_after_hash); //Save Image Into Images Folder

        $data_request['image'] = $image_name_after_hash; // Append Image To $data_request

        $this->mealModel->create($data_request); // Save Image Into Database

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

            $data_request = $request->except('image'); // Except Image From Data

            $this->delete_Images_From_Disk($meal->image); // Delete Image From Disk If that Not Default image;

            $image_name_after_hash = $this->hash_Image_Name($request->image); //Hash Image Name

            $this->save_Image_Into_Disk($request->image, $image_name_after_hash); //Save Image Into Images Folder

            $data_request['image'] = $image_name_after_hash; // Append Image To $data_request
        } else {
            $data_request['image'] = $meal->image; // Append $meal->Image To $data_request

        }

        $meal->update($data_request);
        Alert::toast('Update Meal Successfully', 'success');
        return redirect()->route('admin.meal.index');
    }

    public function destroy($meal)
    {
        $this->delete_Images_From_Disk($meal->image);
        $meal->delete();
        Alert::toast('Delete Meal Successfully', 'Danger');
        return redirect()->route('admin.meal.index');

    }


}
