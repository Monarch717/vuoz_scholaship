<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
//        session(['admin_name' => $admin_user->name]);
//        session(['admin_email' => $request['admin_email']]);
    }

    //scholar auth part
    public function scholarRegister(Request $request)
    {
        $this->validate(request(), [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $username = $request->username;
        $email = $request->email;
        $password = $request->password;

        $user_valid = DB::table('users')->where('email', $email)->get();
        if (count($user_valid) > 0) {
            $error = 'This user already exist!';
            session(['error' => $error]);
            return back()->withErrors(['msg' => $error]);
        } else {
            DB::table('users')->insert([
                'name' => $username,
                'email' => $email,
                'password' => Hash::make($password),
                'user_role' => 3,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            return redirect('/scholar/login')->with(['msg'=> 'User created!']);
        }
    }

    public function scholarLogin(Request $request)
    {
        $email = $request->email;
        $username = $request->username;
        $password = $request->password;

        $scholar_user = DB::table('users')->where('email', $email)->first();

        if ($scholar_user !== null) {
            if (Hash::check($password, $scholar_user->password)) {
                session(['scholar_name' => $scholar_user->name]);
                session(['scholar_email' => $scholar_user->email]);
                session(['scholar_session' => true]);
                return redirect('/scholar/overview');
            } else {
                $error = 'Please enter correct password!';
                session(['error' => $error]);
                return back()->withErrors(['msg' => $error]);
            }
        } else {
            $error = 'Please enter valid email address!';
            session(['error' => $error]);
            return back()->withErrors(['msg' => $error]);
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
