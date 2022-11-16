<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminChefInterface;
use App\Http\Traits\ImageTraits;
use App\Http\Traits\ChefTrait;
use App\Models\Chef;
use RealRashid\SweetAlert\Facades\Alert;

class AdminChefRepository implements AdminChefInterface
{

    private $chefModel;

    use ImageTraits, ChefTrait;

    public function __construct(Chef $chef)
    {
        $this->chefModel = $chef;
    }

    public function index()
    {
        $chefs = $this->getAllData($this->chefModel);
        return view('Admin.Chef.index', compact('chefs'));
    }

    public function create()
    {
        return view('Admin.Chef.create');
    }

    /**
     * @param $request
     * 1- validate data
     * 2- move image to public
     * 3- insert data into database
     * 4- set session
     * 5- redirect to index page
     */
    public function store($request)
    {
        $imageName = $this->handleImage($request->image);
        $this->uploadImage($request->image, $imageName, 'chef');

        $this->chefModel::create([
           'image' => $imageName,
           'name' => $request->name,
           'description' => $request->description
        ]);

        toast('Chef Was Created !','success');
        return redirect(route('admin.chef.index'));
    }

    /**
     * @param $request
     * 1- validate data
     * 2- get record
     * 3- delete image from public
     * 4- delete record
     * 5- set session
     * 6- redirect back
     */
    public function delete($request)
    {
        $chef = $this->getRecordById($this->chefModel, $request->id);
        unlink(public_path($chef->image));

        $chef->delete();
        toast('Chef Was Deleted !','success');
        return back();
    }

    /**
     * @param $request
     * 1- validate data
     * 2- get record
     * 3- redirect edit page
     */
    public function update($request)
    {
        $chef = $this->getRecordById($this->chefModel, $request->id);
        return view('Admin.Chef.edit', compact('chef'));
    }

    /**
     * @param $request
     * 1- validate data
     * 2- get record
     * 3- update record
     * 4- set session
     * 5- redirect index page
     */
    public function edit($request)
    {
        $chef = $this->getRecordById($this->chefModel, $request->id);
        $image = $request->image;

        if ($request->has('image')) {
            $imageName = $this->handleImage($request->image);
            $this->uploadImage($image, $imageName, 'chef', $chef->image);
        }

        $chef->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => (isset($imageName)) ? $imageName : $chef->getRawOriginal('image')
        ]);

        toast('Chef Was Updated !','success');
        return redirect(route('admin.chef.index'));
    }

}
