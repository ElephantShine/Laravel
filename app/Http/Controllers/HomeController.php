<?php
/**
 * Created by PhpStorm.
 * User: cash
 * Date: 2018/02/13
 * Time: 21:16
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public static function Index()
    {
        return view("Home.Index");
    }
}