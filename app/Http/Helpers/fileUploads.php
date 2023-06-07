<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

function imgUploads($img, $name, $path)
{
    $extension = Str::after($img->getMimeType(), '/');
    $name = $name . '-' . now()->timestamp . '.' . $extension;
    File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
    $uploaded_img = $img->move(public_path($path), $name);

    return $uploaded_img;
}