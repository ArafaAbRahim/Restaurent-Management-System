<?php

namespace App\Http\Controllers;

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
}
