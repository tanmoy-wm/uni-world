<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Media;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    public static function upload($file, $name, $path)
    {
        $extension = Str::after($file->getMimeType(), '/');
        $file_name = $name . '-' . now()->timestamp . '.' . $extension;
        File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
        $uploaded_file = $file->move(public_path($path), $file_name);

        dd($file_name, $file->getSize(), $uploaded_file, $extension);
        Media::create([
            'name'      => $file_name,
            'path'      => $uploaded_file,
            'size'      => $file->getSize(),
        ]);
    }
}
