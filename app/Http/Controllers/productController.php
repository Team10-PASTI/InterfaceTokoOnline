<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();
        $response = $client->request('GET','http://localhost:9010/produk/');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);

        return view('beranda',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $foto = $request->file('gambar');
        $NamaFoto = time().'.'.$foto->extension();
        $foto->move(public_path('produk'), $NamaFoto);

        $response = Http::post('http://localhost:9010/produk/',[
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'gambar' => $NamaFoto,
            'detail' => $request->detail
        ]);

        return redirect(route('index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
