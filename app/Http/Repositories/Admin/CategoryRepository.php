<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\CategoryInterface;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryRepository implements CategoryInterface
{
    private $categoryModel;

    public function __construct(Category $category)
    {
        $this->categoryModel = $category;
    }

    public function index()
    {
        $categories = $this->categoryModel::get();
       return view('Admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('Admin.category.create');
    }

    public function store($request)
    {
        $this->categoryModel::create($request->validated());
        return redirect(route('admin.category.index'));
    }

    public function edit($category)
    {
        return view('Admin.category.edit', compact('category'));
    }

    public function update($request, $category)
    {
        $category->update($request->validated());
        Alert::toast('Toast Message', 'success');
        return redirect(route('admin.category.index'));
    }

    public function delete($category)
    {
        $category->delete();
        return back();
    }
}
