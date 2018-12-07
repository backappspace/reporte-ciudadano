<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReporteCiudadanoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $dummy = [
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
            ['cp' => rand(11111, 99999), 'count' => rand(0, 100)],
        ];

        return view('manager.rc.index', compact('dummy'));
    }

    public function showByPostalCode($postalCode)
    {
        return view('manager.rc.showByPostalCode', compact('postalCode'));
    }

    public function show()
    {
        return view('manager.rc.show');
    }

    public function update()
    {

    }
}
