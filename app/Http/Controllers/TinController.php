<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    public function index()
    {
        $loaitin_arr = DB::table('loaitin')->select('idLT', 'Ten')
            ->orderby('ThuTu', 'asc')
            ->where('AnHien', '=', '1')
            ->limit(5)->get();
        $data = ['loaitin_arr' => $loaitin_arr];
        return view('home', $data);
    }

    public function chitiet($id = 0)
    {
        // $data = ['id' => $id];
        // return view('chitiet', $data);
        $tin = DB::table('tin')->where('idTin', $id)->first();
        $data  = ['idTin' => $id, 'tin' => $tin];
        return view('chitiet', $data);
    }

    public function tintrongloai($idLT = 0)
    {
        // $data = ['idLT' => $idLT];
        // return view('tintrongloai', $data);
        $listtin = DB::table('tin')->where('idLT', $idLT)->get();
        $data = ['idLT' => $idLT, 'listtin' => $listtin];
        return view('tintrongloai', $data);
    }
}