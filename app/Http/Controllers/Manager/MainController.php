<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('manager.index');
    }

    public function news()
    {
        return view('manager.news.index');
    }

    public function createNews()
    {
        return view('manager.news.create');
    }

    public function showNews()
    {
        return view('manager.news.show');
    }
}
