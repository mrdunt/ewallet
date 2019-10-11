<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
use Illuminate\Http\Request;
use DB,Session;

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
            $email = Session::get('user')->email;
             $data = User::where('email', $email)           
                ->first();
            $transaction = DB::table('transactions')
            ->select('id', 'type', 'amount')
            ->where('transactions.user_id',$data->id)
            ->get();               
            return view('home',compact('data','transaction'));
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
        return redirect()->route('users.index',compact($user));
        }else{
echo "<script>alert('Login Failed ! Wrong Username or Password'); window.location='/login'; </script>";        }

       
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
        echo "<script>alert('Registration Success'); window.location='/login'; </script>";
    
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
