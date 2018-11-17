<?php

namespace App\Http\Controllers;

use App\DetailTransaction;
use App\Product;
use App\StatusTransaction;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $transactions = $user->transactions;
        return view('transaction.index', compact('transactions'));
    }

    public function uploadPayment(Request $request)
    {
        return view('transaction.upload-payment-transfer');
    }

    public function confirmPayment(Request $request)
    {
        $carts = Auth::user()->carts;
        $statusTransactions = StatusTransaction::where(['name' => "Menunggu Pembayaran"])->firstOrFail();

        $transaction = new Transaction();
        $transaction->total_price = $request["total"];
        $transaction->shipment_fee = $request["shipment_fee"];
        $transaction->shipment_etd = $request["shipment_etd"];
        $transaction->prove_payment = "-";
        $transaction->address = $request["address"];
        $transaction->id_user = Auth::user()->id;
        $transaction->id_status = $statusTransactions->id;
        $transaction->save();

        foreach ($carts as $cart) {
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

        return view('transaction.confirm-payment');
    }

    public function show($id)
    {
        $transaction = Transaction::find($id);
        $detailTransactions = $transaction->detailTransactions;
        return view('transaction.show', compact('detailTransactions'));
    }

    public function indexAdmin()
    {
        $transactions = Transaction::all();
        return view('adminlte::transaction.index')->with('transactions', $transactions);
    }

    public function detailTransaction($id)
    {
        $detail = DetailTransaction::findOrFail($id);
        $idProduct = $detail->id_product;

        $products = Product::all();

        $decoded = json_decode($products, true);

        foreach ($decoded as $key){
            $data = (json_decode($key['images'], true));
        }

//        dd($products);

        return view('adminlte::transaction.show', compact('data'))
            ->with('decoded', $decoded)
            ->with('detail', $detail)
            ->with('products', $products);
        return view('adminlte::transaction.show')->with('detail', $detail);
    }
}
