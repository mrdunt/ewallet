<?php

namespace App\Http\Controllers;
use App\User;
use App\Transaction;
use Illuminate\Http\Request;
use Session;
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
        $duit = Session::get('user')->balance;
        $emailStatus = User::where('email', $emailReceiver)         
                        ->first();
        if(($emailStatus)||($sender>$amount)){
            dd( $duit);
        }else{
            dd($sender);
        }
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
