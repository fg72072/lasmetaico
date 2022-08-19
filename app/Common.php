<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Common extends Model
{
    public static function getFileName($image)
    {
        return time() . '.' . str_replace(' ', '_', strtolower($image->getClientOriginalName()));
    }


    public static function getProfilePicPath()
    {
        return public_path() . "/front/images/";
    }
    public static function unlinkProfilePic($file)
    {
        $file_path = Common::getProfilePicPath();
        $file = $file_path . $file;
        // return $file;
        if (file_exists($file)) {
            @unlink($file);
            // return true;
        }

        // return false;
    }
}
