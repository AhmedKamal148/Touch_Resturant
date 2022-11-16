<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

trait handelImage
{

    private function image_func($image_file, $path, $image_from_db = null)
    {
        if ($image_file) {
            $image_hashed = $this->hash_Image_Name($image_file); // hash image Name
            $this->save_Image_Into_Disk($image_file, $path, $image_hashed);
            $this->delete_Images_From_Disk($image_from_db, $path);

            return $image_hashed;
        } else {
            return 'default.jpg';
        }

    }

    private function hash_Image_Name($image)
    {
        return $image->hashName();

    }

    private function save_Image_Into_Disk($image_file, $path, $image_hashed)
    {
        Image::make($image_file)
            ->save(public_path("images") . '\\' . $path . "\\" . $image_hashed);// save images Into Images/meal/
    }

    private function delete_Images_From_Disk($image_from_db, $path)
    {
        if ($image_from_db != null) {
            if ($image_from_db != 'default.jpg') {
                Storage::disk('public_uploads')->delete($path . '\\' . $image_from_db); // Delete Image From Disk;
            }
        }
    }


}