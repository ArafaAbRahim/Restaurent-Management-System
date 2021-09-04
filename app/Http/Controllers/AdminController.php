<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Foods;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user()
    {
        $data = User::all();
        $chefs = Chef::all();
        return view("admin.users",compact("data", "chefs"));
    }

    public function deleteUser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodMenu()
    {
        $data = Foods::all();
        return view("admin.foodmenu", compact("data"));
    }

    public function foodItem()
    {
        return view("admin.add-fooditem");
    }

    public function uploadFood(Request $request)
    {
        $data = new Foods();
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

    public function deleteMenu($id)
    {
        $data = Foods::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateMenu($id)
    {
        $data = Foods::find($id);
        return view("admin.edit-fooditem", compact("data"));
    }

    public function editMenu($id, Request $request)
    {
        $data = Foods::find($id);
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


    public function reservation()
    {
        $data = Reservation::all();
        return view("admin.reservation", compact("data"));
    }

    public function makeReservation(Request $request)
    {
        $data = new Reservation();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();
        return redirect()->back();
    }


    public function chefs()
    {
        $data = Chef::all();
        return view("admin.chefs", compact("data"));
    }

    public function addChef()
    {
        return view("admin.add-chef");
    }

    public function uploadChef(Request $request)
    {
        $data = new Chef();
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back();
    }

    public function updateChef($id)
    {
        $data = Chef::find($id);
        return view("admin.edit-chef", compact("data"));
    }

    public function editChef(Request $request, $id)
    {
        $data = Chef::find($id);
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back();
    }

    public function deleteChef($id)
    {
        $data = Chef::find($id);
        $data->delete();
        return redirect()->back();
    }
}


