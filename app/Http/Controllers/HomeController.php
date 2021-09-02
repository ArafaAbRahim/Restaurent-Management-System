<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Foods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data = Foods::all();
        $chefs = Chef::all();
        return view('home', compact("data", "chefs"));
    }

    public function redirects()
    {
        $data = Foods::all();

        $usertype = Auth::user()->usertype;
        if($usertype == '1')
        {
            return view('admin.layout');
        }
        else
        {
            return view('home', compact("data"));
        }
    }
}
