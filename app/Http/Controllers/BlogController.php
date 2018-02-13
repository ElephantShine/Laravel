<?php
/**
 * Created by PhpStorm.
 * User: cash
 * Date: 2018/02/14
 * Time: 01:36
 */

namespace App\Http\Controllers;


class BlogController extends Controller
{
    public function Index($name)
    {
        $model = [
            "blog" => $this->findBlog($name)
        ];

        return view("Blog.Index", $model);
    }

    function blogs()
    {
        $path = storage_path("json/blogs.json");
        $file = file_get_contents($path);
        $file = $this->removeBOM($file);
        $json = json_decode($file, true);
        return $json;
    }

    function findBlog($name)
    {
        $blog = collect($this->blogs())->firstWhere("Path", $name);
        return $blog;
    }

    function removeBOM($str = '')
    {
        if (substr($str, 0, 3) == pack("CCC", 0xef, 0xbb, 0xbf))
            $str = substr($str, 3);

        return $str;
    }
}