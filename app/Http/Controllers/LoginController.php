<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function halamanlogin()
    {
        return view('login');
    }

    public function postlogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($request->only('email', 'password'))){
            
            return view('home');
        }
        return redirect('/halamanlogin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
