<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('do_logout');
    }
    public function index()
    {
        return view('pages.auth.main2');
    }
    public function register()
    {
        return view('pages.auth.main');
    }
    public function do_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:255',
            'password' => 'required|min:8',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('email')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email'),
                ]);
            }else{
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ]);
            }
        }
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            if(Auth::user()->level == '1'){
                return response()->json([
                    'alert' => 'success',
                    'message' => 'Welcome back '. Auth::user()->name,
                    'callback' => route('admin.index'),
                ]);
            }elseif(Auth::user()->level == 'designer2'){
                return response()->json([
                    'alert' => 'success',
                    'message' => 'Welcome back '. Auth::user()->name,
                    'callback' => route('user.index'),
                ]);
            }elseif(Auth::user()->level == '3'){
                return response()->json([
                    'alert' => 'success',
                    'message' => 'Welcome back '. Auth::user()->name,
                    'callback' => route('user.index'),
                ]);
            }else{
                return response()->json([
                    'alert' => 'success',
                    'message' => 'Welcome back '. Auth::user()->name,
                    'callback' => route('user.index'),
                ]);
            }
        }else{
            return response()->json([
                'alert' => 'error',
                'message' => 'Maaf, sepertinya ada beberapa kesalahan yang terdeteksi, silakan coba lagi.',
            ]);
        }
    }
    public function do_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'repassword' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('username')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('username'),
                ]);
            } elseif ($errors->has('email')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email'),
                ]);
            } elseif ($errors->has('password')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ]);
            } elseif ($errors->has('repassword')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('repassword'),
                ]);
            }
        }
        
        
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->created_at = now();
        $user->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Akun '.$request->name.' Berhasil Terdaftar',
            'callback' => route('auth.index'),
        ]);
        
    }
    public function do_logout()
    {
        $user = Auth::user();
        Auth::logout($user);
        return redirect('auth');
    }
}