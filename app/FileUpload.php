<?php

namespace App;
use File;
use Storage;

class FileUpload
{
    public static function photo($request, $filename, $default = "") {
        $name = "";
        $photo = $request->photo;

        if($request->hasFile($filename)) {
            $extension = $photo->getClientOriginalExtension();
            $name = rand(11111,99999).".".date('Y-m-d').".".time().".".$extension;
            Storage::disk('photo')->put($name,File::get($photo));
            $name = $name;
        }
        else {
            $name = $default;
        }
        //dd($name);
        return $name;
    }
}
