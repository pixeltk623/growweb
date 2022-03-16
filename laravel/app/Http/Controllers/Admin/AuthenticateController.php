<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Route;

class AuthenticateController extends Controller
{
    
    public function index() {

        if(!Auth::guard('admin')->user()) {
            return view('admin.auth.login');
        } else {
            return redirect('/admin');
        }
        
    }

    public function sendLoginDetails(Request $request) {

        if ($request->isMethod('post')) {

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required','min:8'],
            ]);

            $email = $request->post('email');
            $password = $request->post('password');


            $userobj = User::where('email', $email)->first();

           // dd($userobj->password);

            //dd(Hash::check($password, $userobj->password));

            // die;
            if (!is_null($userobj)) {
                if(Hash::check($password, $userobj->password)) {
                    Auth::guard('admin')->login($userobj);
                    return redirect('/admin');
                } else {
                return back()->withErrors([
                    'password' => 'The provided Password do not match our records.',
                ]);
               }
            } else {
                return back()->withErrors([
                    'email' => 'The provided Email do not match our records.',
                ]);
            }

            /*if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
     
                return redirect()->intended('dashboard');
            }
     
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);*/

            /*if (Auth::attempt(['email' => $email, 'password' => $password, 'status' => 1])) {
              
              echo "Login Done";

            } else {
                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ]);
            }*/

            /*if (Auth::guard('admin')->attempt($credentials)) {
               
               echo "Hello";

            }*/

        }
    }

    public function destroy(Request $request) {

        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/admin/login');
    }
}
