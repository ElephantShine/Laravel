<?php
/**
 * Created by PhpStorm.
 * User: cash
 * Date: 2018/02/14
 * Time: 01:36
 */

namespace App\Http\Controllers;


use App\Utility;

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
        $utility = new Utility();
        return $utility->getDataFromJson("json/blogs.json");
    }

    function findBlog($name)
    {
        $blog = collect($this->blogs())->firstWhere("Path", $name);
        return $blog;
    }
}