<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function uploadPayment(Request $request)
    {
        return view('transaction.upload-payment-transfer');
    }

    public function confirmPayment(Request $request)
    {
        dd($request["address"], $request["total"], $request["shipment_fee"], $request["shipment_etd"]);
        return view('transaction.confirm-payment');
    }

}
