<?php

namespace App\Http\Traits;

trait ChefTrait
{
    private function getRecordById($model, $id)
    {
        return $model::find($id);
    }

    private function getAllData($model)
    {
        return $model::get();
    }

}
