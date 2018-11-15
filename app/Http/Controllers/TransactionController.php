<?php

namespace App\Http\Controllers;

use App\DetailTransaction;
use App\StatusTransaction;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{

    public function uploadPayment(Request $request)
    {
        return view('transaction.upload-payment-transfer');
    }

    public function confirmPayment(Request $request)
    {
        $carts = Auth::user()->carts;
        $statusTransactions = StatusTransaction::where(['name'=> "Menunggu Pembayaran"])->firstOrFail();

        $transaction = new Transaction();
        $transaction->total_price =$request["total"];
        $transaction->shipment_fee = $request["shipment_fee"];
        $transaction->shipment_etd = $request["shipment_etd"];
        $transaction->prove_payment = "-";
        $transaction->address = $request["address"];
        $transaction->id_user = Auth::user()->id;
        $transaction->id_status = $statusTransactions->id;
        $transaction->save();

        foreach ($carts as $cart){
            $detailTransaksi = new DetailTransaction();
            $detailTransaksi->quantity = $cart->quantity;
            $detailTransaksi->comment = $cart->comment;
            $detailTransaksi->sub_total_price = $cart->sub_total_price;
            $detailTransaksi->id_transaction = $transaction->id;
            $detailTransaksi->id_product = $cart->id_product;
            $detailTransaksi->id_cart = $cart->id;
            $detailTransaksi->save();
            $cart->is_active = false;
            $cart->save();
        }
        
        dd($request["address"], $request["total"], $request["shipment_fee"], $request["shipment_etd"]);
        return view('transaction.confirm-payment');
    }

}
