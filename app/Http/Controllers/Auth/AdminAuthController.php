<?php

namespace App\Http\Controllers\Auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminAuthController extends Controller
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
    protected $redirectTo = '/admin/beranda';

    //atur percobaan login hanya 3 kali per user
    protected $maxAttempts = 3;

    //atur jedanya 2 menit untuk kesempatan login selanjutnya
    protected $decayMinutes = 2;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function get_login()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => "required|string"
        ]);

        $login = [
            'username' => $request->username,
            'password' => $request->password
        ];


        $admin = Admin::whereUsername($request->username)->first();
        if ($admin) {
            if (Auth::guard('admin')->attempt($login)) {
                $request->session()->regenerate();
                $this->clearLoginAttempts($request);
                return redirect()->route('admin.beranda')->with(['success' => 'Berhasil Login']);
            } else {
                $this->incrementLoginAttempts($request);
                return redirect()
                    ->back()
                    ->withInput()
                    ->with(['error' => 'Username atau Password Salah!']);
            }
        }
        return redirect()->back()->with(['error' => 'Akun Anda Tidak Ditemukan/Telah Dinonaktifkan!']);
    }

    protected function authenticated()
    {
        Auth::guard('admin')->logoutOtherDevices(request('password'));
    }

    public function logout()
    {
        Session::flush();
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
