<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function get_login()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nip' => 'required|string',
            'password' => "required|string"
        ]);

        $login = [
            'nip' => $request->nip,
            'password' => $request->password
        ];


        $user = User::whereNip($request->nip)->first();
        if ($user) {
            if (Auth::attempt($login, $request->get('remember'))) {
                return redirect()->route('user.beranda');
            }
            return redirect()->back()->with(['error' => 'NIP atau Password Salah!']);
        }
        return redirect()->back()->with(['error' => 'Akun Anda Tidak Ditemukan/Telah Dinonaktifkan!']);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('user.login');
    }
}
