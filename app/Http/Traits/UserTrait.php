<?php

namespace App\Http\Traits;

trait UserTrait
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
