<?php
/**
 * Created by PhpStorm.
 * User: cash
 * Date: 2018/02/13
 * Time: 22:32
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

class PortfolioController extends Controller
{
    public function Index()
    {
        $model = [
            "portfolios" => $this->portfolios()
        ];

        return view("Portfolio.Index", $model);
    }


    public function Portfolio($name)
    {
        $model = [
            "portfolio" => $this->findPortfolios($name)
        ];

        return view("Portfolio.Detail", $model);
    }

    function portfolios()
    {
        $path = storage_path("json/portfolios.json");
        $file = file_get_contents($path);
        $file = $this->removeBOM($file);
        $json = json_decode($file, true);
        return $json;
    }

    function findPortfolios($name)
    {
        $portfolio = collect($this->portfolios())->firstWhere("Path", $name);
        return $portfolio;
    }

    function removeBOM($str = '')
    {
        if (substr($str, 0, 3) == pack("CCC", 0xef, 0xbb, 0xbf))
            $str = substr($str, 3);

        return $str;
    }
}