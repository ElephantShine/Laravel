<?php
/**
 * Created by PhpStorm.
 * User: cash
 * Date: 2018/02/14
 * Time: 02:04
 */

namespace App;


class Utility
{
    public function getDataFromJson($name)
    {
        $file = file_get_contents(storage_path($name));
        $file = $this -> removeBOM($file);
        return json_decode($file, true);
    }

    function removeBOM($str = '')
    {
        if (substr($str, 0, 3) == pack("CCC", 0xef, 0xbb, 0xbf))
            $str = substr($str, 3);

        return $str;
    }
}