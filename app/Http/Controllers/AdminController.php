<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user()
    {
        $data = User::all();
        return view("admin.users",compact("data"));
    }

    public function deleteUser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodMenu()
    {
        return view("admin.foodmenu");
    }

    public function uploadFood(Request $request)
    {
        $data = new Foods;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back();
    }
}
