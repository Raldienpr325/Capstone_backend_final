<?php

namespace App\Http\Controllers;

use App\Models\materi;
use App\Models\MateriKategori;
use App\Models\SubMateri;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginUser()
    {
        // dd('ini halaman login user');
        return view('User.login');
    }

    public function signup()
    {
        return view('User.signup');
    }
    public function curriculum()
    {
        $data = MateriKategori::with(['materi', 'kategori'])
            ->get()
            ->groupBy('materi.id');
        return view('User.curriculum', compact('data'));
    }
    public function aboutus()
    {
        return view('User.aboutus');
    }
    public function class()
    {
        return view('User.class');
    }

    public function registerUser(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|max:20',
            'email' => [
                'required', 'min:3', 'max:255', 'unique:users'
            ],
            'password' => 'required|min:5|max:255'
        ]);
        $validated['password'] = bcrypt($validated['password']);

        $sukses = User::create($validated);
        if ($sukses) {
            return redirect('login-user')->with('success', 'Registration Successfull');
        }
    }

    public function berhasilLogin($id)
    {
        $data = MateriKategori::with(['materi', 'kategori'])
            ->whereRelation('materi', 'kelas', '=', $id)
            ->get()
            ->groupBy('materi.id');
        return view('User.dashboard', compact('data'));
    }


    public function authenticated(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard', ['id' => 1]);
        } else {
            return back()->with('loginError', 'Login Failed');
        }
    }

    public function detail(Request $request, $id)
    {
        $data = materi::where('id', $id)->get();
        $sub = SubMateri::where('materi_id', $id)->get();
        return view('User.detail', compact(['data', 'sub']));
    }

    public function sub($id)
    {
        $parent = SubMateri::with('parent')
            ->where('id', $id)
            ->first();
        $data = SubMateri::with('parent')
            ->where('id', $id)
            ->get();

        $sub = SubMateri::where('materi_id', $parent['materi_id'])->get();

        return view('User.submateri', compact([
            'id',
            'data',
            'parent',
            'sub'
        ]));
    }
}