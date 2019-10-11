<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        if ($request->session()->has('user')) {
            return view('home');
        }else{
            return redirect('/login');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function login(Request $request)
    {
       $email = $request->get('email');

       $password = $request->get('password');
       $user = User::where('email', $email)
                ->where('password',$password)               
                ->first();
       
        if($user){
        session(['user'=>$user]);
        $user = $request->session()->all();
        return view('home',compact($user));
        }else{
           return back(); 
        }

       
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect('/login');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        User::create($request->all());
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
