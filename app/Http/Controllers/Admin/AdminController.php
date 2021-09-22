<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shortlink;
use App\Models\Schedule;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'  => 'required|email:dns',
            'password'  => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin/');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Succesfully Logout!');
    }

    public function dashboard()
    {
        return view('admin.index', [
            'shortlinks'        => Shortlink::all()->count(),
            'applicants'        => Applicant::all()->count(),
            'staffs'            => Schedule::where('acceptance', '!=', null)->count()
        ]);
    }

    public function interview()
    {
        return view('admin.applicant.interview', [
            'schedules'     => Schedule::all()
        ]);
    }

    public function acceptance(Request $request)
    {
        $applicant = Schedule::firstWhere('nrp', $request->nrp);
        $applicant->update([
            'acceptance'    => 'Accepted'
        ]);
        return redirect('/admin/interview');
    }
}
