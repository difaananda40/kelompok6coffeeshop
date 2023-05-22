<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputable = false;
        foreach ($request->id as $key => $id) {
            if($request->jumlah[$key] > 0) {
                $inputable = true;
            }
        }

        if($inputable) {
            $transaction = Transaction::create([
                'user_id' => Auth::user()->id
            ]);

            foreach ($request->id as $key => $id) {
                if($request->jumlah[$key] > 0) {
                    TransactionDetail::create([
                        'transaction_id' => $transaction->id,
                        'menu_id' => $id,
                        'jumlah' => $request->jumlah[$key]
                    ]);
                }
            }

            return redirect()->route('transaction.show', ['id' => $transaction->id]);
        }

        return view('menu');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $transaction = Transaction::with(['transaction_details'])->find($id);

        return view('transaction-detail', [
            'transaction' => $transaction
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);
        $transaction->update([
            'paid' => 1
        ]);

        return redirect()->route('transaction.show', $id);
    }

}
