<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function checkoutDetail()
    {
        return view('transaction.checkout-detail');
    }

    public function uploadPayment()
    {
        return view('transaction.upload-payment-transfer');
    }

    public function confirmPayment()
    {
        return view('transaction.confirm-payment');
    }

}
