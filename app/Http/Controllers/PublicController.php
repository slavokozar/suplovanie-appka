<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FileFacade;

class PublicController extends Controller
{
    public function index(){
        $file = File::orderBy('updated_at', 'desc')->first();

        if($file){
            $storagePath = storage_path('app/images/' . $file->filename);

            return response()->file($storagePath);

        }

    }
}
