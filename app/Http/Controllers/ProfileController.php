<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = User::all();
        return view('home.index', compact('profiles'));
    }
    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $user = User::finOrFail($id);
    //     return view('profile.show', compact('user'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,User $user)
    {
        //$user=User::find($id);
        $data=$request->only('name','lastname','email');
        $password=$request->input('password');
        if ($password) 
            $data['password']=bcrypt($password);
        
        $user->update($data);
        return redirect()->route('profile.index');
    }

}
