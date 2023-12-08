<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controller\SiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'welcome'
        ]);
    }

    //register form
    public function log()
    {
        return view('auth.log');
    }
    //register sumbit
    public function store(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|max:250|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('welcome');
    }
    //login form

    //proses login
    public function authentication(Request $request, Auth $auth)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
        
            // Check user role
            if ($user->role_id === 1) {
                // Jika role_id 1 (user), redirect ke halaman siswa
                return redirect()->to('/siswa/create');
            } else {
                // Redirect ke halaman selamat datang jika role bukan user
                return redirect()->route('welcome');
            }
        }
        
        return back()->withErrors([
            'email' => 'Email password salah'
        ])->onlyInput('email');
    }

    public function welcome()
    {
        $jumlah_Siswa= Siswa::count();

        $siswa = Siswa::all();
        return view('welcome', compact('siswa'));

        if (Auth::check()) {
            return view('welcome');
        }
        return redirect()->route("auth.log");
    }

    //logout
    public function logout(Request $request, Auth $auth)
    {
        $auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.log');
    }
}
