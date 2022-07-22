<?php

namespace App\Http\Controllers;

use App\Models\Produk;

use Illuminate\Http\Request;
use Auth;
use Validator;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
class ProduksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
    public function tarik_produk()
    {
		$client = new Client();
		$username = "tesprogrammer".date("dmy")."C". date("H");
		$password = md5("bisacoding-".date("d")."-".date("m")."-".date("y"));
		// dd($username);
        $res = $client->request('POST', 'https://recruitment.fastprint.co.id/tes/api_tes_programmer', [
            'form_params' => [
			'username' => $username,
			'password' => $password,
            ]
        ]);
        $stasuscode = $res->getStatusCode();
        $body = $res->getBody()->getContents();
        $data = json_decode($body,true);
		
        // dd($data['data']);
		foreach($data['data'] as $d){
			// dd($d["nama_produk"]);
			// dd($d);
			// dd(strlen ((string)$d["kategori"]));
			$produk=Produk::where("nama_produk", $d["nama_produk"])->delete();
			
			 $produk2 = Produk::create([
				"nama_produk" => (string)$d["nama_produk"],
				"harga" => (string)$d["harga"],
				"kategori" => (int)$d["kategori"],
				"status" => (string)$d["status"]
			]);
		}
		
		return Redirect("/home");
	}
    public function index()
    {
        //
		
		// dd( date("y"));
		
        $produk = Produk::all();
		// dd($produk[0]->nama_produk);
        return view("home")->with([
                "produks" => $produk
            ]);
    }
    public function input_produk()
    {
        //
        return view("input");
    }
	
    public function avail_produk()
    {
        //
        $produk = Produk::where("status", "bisa dijual")->get();
		// dd($produk)->get();
        return view("home")->with([
			"produks" => $produk
		]);
    }

    public function storeProduk(Request $request)
    {   
        // dd($request->all());
		
		
        $request->validate([
            "nama_produk" => ['required', 'string', 'max:100'],
            "harga" => ['required'],
            "kategori" =>['required', 'string', 'max:50'],
        ]);
		
		 $produk = Produk::create([
            "nama_produk" => $request->nama_produk,
            "harga" => $request->harga,
            "kategori" => $request->kategori,
			"status" => $request->status
        ]);
		
		
		return Redirect("/home");
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(int $produk)
    {
        //
		
        $produk = Produk::where("id_produk", $produk)->get();
		// dd($produk[0]->id_produk);
        return view("edit")->with([
			"produk" => $produk[0]
		]);
		
		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(int $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $produk)
    {
        //
		
        $request->validate([
            "nama_produk" => ['required', 'string', 'max:100'],
            "harga" => ['required'],
            "kategori" =>['required', 'string', 'max:50'],
        ]);
		
		Produk::where("id_produk", $produk)->update([
            "nama_produk" => $request->nama_produk,
            "harga" => $request->harga,
            "kategori" => $request->kategori,
			"status" => $request->status
        ]);
        $produk = Produk::where("id_produk", $produk)->get();
		// dd($produk[0]->id_produk);
        return view("edit")->with([
			"produk" => $produk[0]
		]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id_produk)
    {
        //
		// dd($id_produk);
		$produk=Produk::where("id_produk", $id_produk)->delete();
		return redirect('/home')->with('success','Task deleted successfully');
    }
	
	
}
