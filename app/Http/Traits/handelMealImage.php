<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

trait handelMealImage
{
    private function hash_Image_Name($image)
    {
        return $image->hashName();

    }

    private function save_Image_Into_Disk($image_from_request, $image_Name_after_hashed)
    {
        Image::make($image_from_request)
            ->save(public_path('images/meals/') . $image_Name_after_hashed);// save images Into Images/meal/
    }

    private function delete_Images_From_Disk($imagePath)
    {
        if ($imagePath != 'default.jpg') {
            Storage::disk('public_uploads')->delete('meals/' . $imagePath); // Delete Image From Disk;
        }
    }
}