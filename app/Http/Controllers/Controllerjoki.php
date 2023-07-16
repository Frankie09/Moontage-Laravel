<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class Controllerjoki extends Controller
{
    public function home()
    {
        return view('home', ['title' => 'Home']);
    }

    public function servicerank()
    {
        return view('servicerank', ['title' => 'Joki']);
    }

    public function submitjoki(Request $data)
    {
        $secretKey = 'jokirankmoontage';
        $validatedData = $data->validate([
            'name' => 'required|string',
            'password' => 'required',
            'message' => 'required',
            'userid' => 'required',
            'my-radio' => 'required',
            'jumlah' => 'required',
            'nohp' => 'required',
        ]);
        $password = $data->input('password');
        $encryptedPassword = Crypt::encryptString($password, $secretKey);

        if ($data->input('my-radio') == '1') {
            $harga = 5000;
        } elseif ($data->input('my-radio') == '2') {
            $harga = 6000;
        } elseif ($data->input('my-radio') == '3') {
            $harga = 7000;
        } elseif ($data->input('my-radio') == '4') {
            $harga = 15000;
        } elseif ($data->input('my-radio') == '5') {
            $harga = 20000;
        } elseif ($data->input('my-radio') == '6') {
            $harga = 25000;
        } else {
            $errorMessage = 'Invalid value for my-radio field.';
            session()->flash('alert-class', 'alert-danger');
            session()->flash('message', $errorMessage);
            return redirect()->back()->withInput();
        }

        $id = $data->input('nohp') . str_replace('.', '', strval(time()));

        DB::table('jokirank')->insert([
            'id' => $id,
            'username' => $data->input('name'),
            'password' => $encryptedPassword,
            'request' => $data->input('message'),
            'user_id' => $data->input('userid'),
            'rank_price' => $data->input('my-radio'),
            'jumlah' => $data->input('jumlah'),
            'nohp' => $data->input('nohp'),
            'harga' => $harga * $data->input('jumlah'),

        ]);
        $invoice_id = 'INV-' . date('YmdHis') . '-' . rand(1000, 9999);
        DB::table('payment')->insert([

            'invoice' => $invoice_id,
            'idjokirank' => $id,
            'status' => 'unpaid',
            'username' => $data->input('name'),
            'password' => $encryptedPassword,

        ]);

        // $encryptedPassword = $user->password; // get the encrypted password from the database
        // $decryptedPassword = Crypt::decryptString($encryptedPassword, $secretKey);
        // dd($data->all());
        $validatedDataWithoutPassword = collect($validatedData)->except('password')->toArray();
        return redirect('/payment')->with('data', $validatedDataWithoutPassword)->with('invoice', $invoice_id)->with('id', $id);
    }
}
