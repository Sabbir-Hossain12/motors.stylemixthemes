<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if(Auth::guard('admin')->check()){
            $admin=Admin::where('email',Auth::guard('admin')->user()->email)->first();
            return redirect()->intended(RouteServiceProvider::ADMINHOME);
           
        }else{
            return view('backend.auth.login');
        }
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            
            
                return redirect()->intended(RouteServiceProvider::ADMINHOME);
          
        }else{
            return redirect()->back()->with('error','Information Does Not Match');
        }

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function dashboard(){
        $admin=Admin::where('email',Auth::guard('admin')->user()->email)->first();
         
            return view('backend.content.maincontent');
         
    }

    public function managerdashboard(){
        $admin=Admin::where('email',Auth::guard('admin')->user()->email)->first();
        
            return view('admin.content.adminmaincontent');
         
    }
    public function userdashboard(){
        $admin=Admin::where('email',Auth::guard('admin')->user()->email)->first();
         
            return view('admin.content.adminmaincontent');
        
    }

}