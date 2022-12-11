<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginAdmin()
    {
        return view('Admin.login');
    }

    public function handleAdmin(Request $request)
    {
        if ($request->email == 'admin@gmail.com') {
            return redirect()->route('adminDashboard');
        } else {
            return redirect()->back();
        }
        // if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

        // } else {
        //     return redirect()->back();
        // }
    }

    public function dashboard()
    {
        return view('Admin.dashboard');
    }

    public function materi()
    {
        $data = materi::all();
        return view('Admin.materi', compact('data'));
    }

    public function categories()
    {
        $data = Category::all();
        return view('Admin.category', compact('data'));
    }
}