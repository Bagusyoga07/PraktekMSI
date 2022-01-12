<?php

namespace App\Http\Controllers;

use App\Models\Barangs;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    public function index(){
        $data = Barangs::all();
        return view('databarang',compact('data'));
    }

    public function tambahbarang(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        dd($request->all());
        Barangs::create($request->all());
    }
}
