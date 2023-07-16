<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controllercekid extends Controller
{
    public function cekid()
    {

        return view('cekid', ['title' => 'CekID']);
    }

    public function cekid2(Request $data)
    {
        $search = $data->input('search');
        $data = DB::table('pesanan')->where('idjokirank', $search)->get();

        if ($data->count() > 0) {
            return view('cekid', ['title' => 'CekID', 'data' => $data]);
        } else {
            return view('cekid', ['title' => 'CekID']);
        }
    }
}
