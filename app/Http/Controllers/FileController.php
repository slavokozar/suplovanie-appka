<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image as ImageFacade;

class FileController extends Controller
{
    public function show($file = null){
        if($file === null){
            $file = File::orderBy('updated_at', 'desc')->firstOrFail();
        } else {
            $file = File::where('filename', $file)->firstOrFail();
        }

        $storagePath = storage_path('app/images/' . $file->filename);

        return response()->file($storagePath);
    }
}
