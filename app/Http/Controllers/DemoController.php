<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction(Request $request)
    {
       $photo= $request->file(key:'photo');
       $size = filesize($photo);
       $type = filetype($photo);
       $originalName = $photo->getClientOriginalName();
       $extension = $photo->extension();

       return array($size, $type, $originalName,$extension  );
    }
    public function FileUpload(Request $request)
    {
        $photo = $request->file(key:'photo');
        $photo->move(public_path('upload'), $photo->getClientOriginalName());
        return 1;

    }
    public function FileStore(Request $request)
    {
        $photo = $request->file(key:'photo');
        $photo->storeAs('photo', $photo->getClientOriginalName());
        return 1;
    }
}
