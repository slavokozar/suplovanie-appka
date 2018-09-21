<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class UploadController extends Controller
{

    public function store(Request $request)
    {

        if($request->hasFile('file')){
            $file = $request->file('file');

            $ext = $file->extension();
            $name = time();

            $filename = $name . '.' . $ext;

            $file->storeAs('images', $filename);

            File::create([
                'filename' => $filename
            ]);
        }

        return redirect()->back();
    }

}




