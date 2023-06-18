<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    public function show(){
        if (Auth::check()) {
            return redirect('/home');
            control.log(Auth::check());
        }
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('/login')->with('succes','Account created successfully');
    }
}