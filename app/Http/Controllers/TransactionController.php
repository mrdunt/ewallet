<?php

namespace App\Http\Controllers;
use App\User;
use App\Transaction;
use Illuminate\Http\Request;
use Session;
use DB;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function transfer(Request $request)
    {
        if ($request->session()->has('user')) {
            return view('transfer');
        }else{
            return redirect('/login');
        }    
    }

    public function proccessTransfer(Request $request)
    {
        $emailReceiver  = $request->get('email');
        $amount = $request->get('amount');
        $sender = $request->session()->all();
        $cash = Session::get('user')->balance;
        $emailStatus = User::where('email', $emailReceiver)         
                        ->first();
        $id =Session::get('user')->id; 
        if(($emailStatus)&&($cash>$amount)){
            DB::table('transactions')->insert(
            ['type' => 'transfer', 'user_id' => $id,'amount'=>$amount]);
            DB::table('users')
              ->where('id', $id)
              ->decrement('balance',$amount);
            DB::table('users')
              ->where('email', $emailReceiver)
              ->increment('balance',$amount);
            echo "<script>alert('Transfer Success'); window.location='/users'; </script>";

        }else{
            echo "<script>alert('Transfer Failed ! Wrong email or Insufficient balance !');
                window.location='/transfer';
                </script>";
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function topup(Request $request)
    {
        if ($request->session()->has('user')) {
            return view('topup');
        }else{
            return redirect('/login');
        }    
    }

    public function proccessTopup(Request $request)
    {
        $amount = $request->get('amount');
        $id = Session::get('user')->id;        
            DB::table('transactions')->insert(
            ['type' => 'topup', 'user_id' => $id,'amount'=>$amount]);
            DB::table('users')
              ->where('id', $id)
              ->increment('balance',$amount);
            echo "<script>alert('Topup Success'); window.location='/users'; </script>";

        
    }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
