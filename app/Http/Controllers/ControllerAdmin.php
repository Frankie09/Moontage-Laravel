<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class ControllerAdmin extends Controller
{


    // public function admin()
    // {

    //     return view('loginadmin', ['title' => 'Login']);
    // }

    // public function loginadmin(Request $data)
    // {
    //     $email = $data->input('email');
    //     $password = $data->input('password');
    //     $hashedPassword = bcrypt($password);

    //     // insert to database
    //     // DB::table('admin')->insert([
    //     //     'username' => $email,
    //     //     'password' => $hashedPassword,
    //     // ]);
    //     // check login
    //     $user = DB::table('admin')->where('username', $email)->first();
    //     if (!$user) {
    //         return redirect()->back()->withErrors(['email' => 'Username not found']);
    //     }
    //     if (!Hash::check($password, $user->password)) {
    //         return redirect()->back()->withErrors(['password' => 'Incorrect password']);
    //     }
    //     session(['admin' => $user]);


    //     return redirect('/homeadmin')->with('data', $user);
    // }

    public function homeadmin()
    {

        return view('admin/adminhome', ['title' => 'Home']);
    }
    public function riwayatadmin()
    {

        $data = DB::table('history')->get();

        return view('admin/riwayat', ['title' => 'Riwayat', 'data' => $data]);
    }

    public function pesananadmin()
    {
        $secretKey = 'jokirankmoontage';
        $data = DB::table('pesanan')
            ->join('payment', 'pesanan.idpayment', '=', 'payment.id')
            ->select('pesanan.*', 'payment.username', 'payment.password')
            ->get();

        foreach ($data as $row) {
            $decryptedPassword = Crypt::decryptString($row->password, $secretKey);
            $row->password = $decryptedPassword;
        }

        return view('admin/pesananadmin', ['title' => 'Pesanan', 'data' => $data]);
    }

    public function logout()
    {
        Auth::logout();
        request()->session->invalidate();
        request()->session->regenerateToken();
        return redirect('auth/login');
    }
}
