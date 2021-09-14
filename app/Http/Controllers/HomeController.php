<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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
        $chefs = Chef::all();

        $usertype = Auth::user()->usertype;
        if($usertype == '1')
        {
            return view('admin.layout');
        }
        else
        {
            $user_id = Auth::id();
            $count = Cart::where('user_id', $user_id)->count();
            return view('home', compact("data", "chefs", "count"));
        }
    }

    public function addCart(Request $request, $id)
    {
        if(Auth::id())
        {
           
            $user_id = Auth::id();
            $foodid = $id;
            $quantity = $request->quantity;

            $cart = new Cart();
            $cart->user_id = $user_id;
            $cart->food_id = $foodid;
            $cart->quantity = $quantity;
            $cart->save();            
            return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }
    }
}
