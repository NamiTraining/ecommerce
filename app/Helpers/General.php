<?php

use Illuminate\Support\Facades\Config;

function get_languages(){

    return \App\Models\Language::active() -> Selection() -> get();
}

if (!function_exists("get_default_lang")) {
    function get_default_lang()
    {
        return Config::get('app.locale');
    }
}
//
//function uploadImage($folder, $image)
//{
//    $image->store('/', $folder);
//    $filename = $image->hashName();
//    $path = 'images/' . $folder . '/' . $filename;
//    return $path;
//}

if (!function_exists("uploadImage")) {
    function uploadImage($folder, $image)
    {
        $image->store('/', $folder);
        $filename = $image->hashName();
        $path = 'images/' . $folder . '/' . $filename;
        return $path;
    }
}



function uploadVideo($folder, $video)
{
    $video->store('/', $folder);
    $filename = $video->hashName();
    $path = 'video/' . $folder . '/' . $filename;
    return $path;
}


