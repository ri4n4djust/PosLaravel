<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sale;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class salesController extends Controller
{
    //
    public function index()
    {
        $posts = Sale::latest()->get();
        return response([
            'success' => true,
            'message' => 'List Semua Posts',
            'data' => $posts
        ], 200);
    }

    public function store(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'nmBarang'     => 'required',
            'hrgJual'   => 'required',
        ],
            [
                'nmBarang.required' => 'Masukkan Title Post !',
                'hrgJual.required' => 'Masukkan Harga !',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {
            //$file = $request->file('gbrBarang');

            $imageName = time().'.'.$request->name->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);

            $post = Sale::create([
                'nmBarang'     => $request->input('nmBarang'),
                'hrgPokok'   => $request->input('hrgPokok'),
                'hrgJual'   => $request->input('hrgJual'),
                'stkBarang'   => $request->input('stkBarang'),
                'deskripsi'   => $request->input('deskripsi')
            ]);


            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Post Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Post Gagal Disimpan!',
                ], 400);
            }
        }
    }


    public function show($id)
    {
        $post = Sale::whereId($id)->first();

        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Post!',
                'data'    => $post
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    public function update(Request $request)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'nmBarang'     => 'required',
            'hrgJual'   => 'required',
        ],
            [
                'nmBarang.required' => 'Masukkan Title Post !',
                'hrgJual.required' => 'Masukkan Harga Jual !',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $post = Sale::whereId($request->input('id'))->update([
                'nmBarang'     => $request->input('nmBarang'),
                'hrgPokok'   => $request->input('hrgPokok'),
                'hrgJual'   => $request->input('hrgJual'),
                'stkBarang'   => $request->input('stkBarang'),
                'deskripsi'   => $request->input('deskripsi')
            ]);


            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Post Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Post Gagal Diupdate!',
                ], 500);
            }

        }

    }

    public function destroy($id)
    {
        $post = Sale::findOrFail($id);
        $post->delete();

        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'Post Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Gagal Dihapus!',
            ], 500);
        }
    }
}
