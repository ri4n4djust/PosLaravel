<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class kategoriController extends Controller
{
    //
    public function index()
    {
        $kate = Barang::latest()->get();
        return response([
            'success' => true,
            'message' => 'List Semua Kategori',
            'data' => $kate
        ], 200);
    }

}
