<?php
/**
 * Created by PhpStorm.
 * User: cash
 * Date: 2018/02/13
 * Time: 22:24
 */

namespace App\Http\Controllers;


class ContactController extends Controller
{
    public function Index()
    {
        return view("Contact.Index");
    }

    public function Success()
    {
        return view("Contact.Success");
    }
}