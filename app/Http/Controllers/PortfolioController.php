<?php
/**
 * Created by PhpStorm.
 * User: cash
 * Date: 2018/02/13
 * Time: 22:32
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Utility;
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
        $utility = new Utility();
        return $utility -> getDataFromJson("json/portfolios.json");
    }

    function findPortfolios($name)
    {
        return collect($this -> portfolios())->firstWhere("Path", $name);
    }
}