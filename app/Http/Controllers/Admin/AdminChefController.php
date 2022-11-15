<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminChefInterface;
use App\Http\Requests\Admin\Chef\CreateChefRequest;
use App\Http\Requests\Admin\Chef\DeleteChefRequest;
use App\Http\Requests\Admin\Chef\EditChefRequest;
use App\Http\Requests\Admin\Chef\UpdateChefRequest;

class AdminChefController extends Controller
{

    private $chefInterface;

    public function __construct(AdminChefInterface $interface)
    {
        $this->chefInterface = $interface;
    }

    public function index()
    {
        return $this->chefInterface->index();
    }

    public function create()
    {
        return $this->chefInterface->create();
    }

    public function store(CreateChefRequest $request)
    {
        return $this->chefInterface->store($request);
    }

    public function delete(DeleteChefRequest $request)
    {
        return $this->chefInterface->delete($request);
    }

    public function update(UpdateChefRequest $request)
    {
        return $this->chefInterface->update($request);
    }

    public function edit(EditChefRequest $request)
    {
        return $this->chefInterface->edit($request);
    }
}
