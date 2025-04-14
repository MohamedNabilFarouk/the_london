<?php

namespace App\Traits;


trait imagesTrait
{

    function saveImages($photo, $folder)
    {
        $file_name = $photo -> hashName();
        $path = public_path($folder);
        $photo -> move($path, $file_name);
        return $file_name;
    }

}