<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class Controllerpayment extends Controller
{
    public function payment()
    {

        $invoice = session('invoice');
        $id =  session('id');
        if (!$invoice) {
            return redirect('/servicerank');
        } else {
            try {
                $payment = DB::table('payment')->where('invoice', $invoice)->first();
                $detail = DB::table('jokirank')->join('tier', 'jokirank.rank_price', '=', 'tier.id_tier')->select('jokirank.rank_price', 'jokirank.jumlah', 'jokirank.harga', 'tier.nama_tier', 'tier.harga_tier')->where('jokirank.id', $id)->get();
                return view('payment', ['title' => 'Payment', 'data' => $payment, 'detail' => $detail, 'id' => $id]);
            } catch (\Exception $e) {
                Alert::error('Insert Error', 'Session expired / Gagal Transaksi')->persistent(true)->autoClose(3000);
                return back()->with('error', 'Session expired / Gagal Transaksi')->withInput();
            }
        }
    }

    public function upload(Request $data)
    {


        $validateData = Validator::make($data->all(), [
            'bcaimage' => 'required|image|file',
            'invoice' => 'required|string',
            'id' => 'required|string'
        ]);
        if ($validateData->fails()) {
            $errors = $validateData->errors()->all();
            Alert::error('Validation Error', $errors[0])->persistent(true)->autoClose(3000);
            return back()->with('invoice', $data->invoice)->with('id', $data->id)->with('errors', $validateData->errors()->all()[0])->withInput();
        }

        if ($data->file('bcaimage')) {
            $gambar['bcaimage'] = $data->file('bcaimage')->store('post-images');
        }

        try {
            DB::table('bukti_transfer')->insert([
                'invoice' => $data->invoice,
                'gambar' => $gambar['bcaimage']
            ]);

            Alert::success('Upload Success', 'Berhasil upload bukti bayar, silahkan cek proses')->persistent(true)->autoClose(3000);
            return view('cekid', ['title' => 'CekID']);
        } catch (\Exception $e) {
            Alert::error('Error', 'Upload ulang, pastikan format berupa gambar')->persistent(true)->autoClose(3000);
            return back()->with('invoice', $data->invoice)->with('id', $data->id)->with('error', 'Failed to insert data into the database')->withInput();
        }
        return view('cekid', ['title' => 'CekID']);
    }
}
