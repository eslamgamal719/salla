<?php

namespace App\Http\traits;

use Illuminate\Support\Facades\Storage;

trait UploadTrait
{

    public function upload($image, $directory, $delete_image = null)
    {
        Storage::has($delete_image) ? Storage::delete($delete_image) : '';
        return request()->file($image)->store($directory);
    }

}
