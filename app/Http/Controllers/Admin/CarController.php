<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\Admin\CarStoreRequest;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::latest()->get();

        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mobil' => 'required|string',
            'harga_sewa' => 'required|numeric',
            'gambar' => 'required',
            'bahan_bakar' => 'required|string',
            'jumlah_kursi' => 'required|numeric',
            'transmisi' => 'required|numeric',
            'status' => 'required|numeric',
            'deskripsi' => 'required',
            'p3k' =>'required|numeric',
            'charger' => 'required|numeric',
            'audio' => 'required|numeric',
            'ac' => 'required|numeric',
        ]);

        $cars = new Car();
        $cars->nama_mobil = $request->nama_mobil;
        $cars->harga_sewa = $request->harga_sewa;
        $cars->gambar = $request->gambar;
        $cars->bahan_bakar = $request->bahan_bakar;
        $cars->jumlah_kursi = $request->jumlah_kursi;
        $cars->transmisi = $request->transmisi;
        $cars->status = $request->status;
        $cars->deskripsi = $request->deskripsi;
        $cars->p3k = $request->p3k;
        $cars->charger = $request->charger;
        $cars->audio = $request->audio;
        $cars->ac = $request->ac;
        $cars->save();

        return redirect()->route('index')->with('success', 'Berhasil menambahkan data');
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $cars = Car::all();
        return view('frontend.homepage', compact('cars'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cars = Car::find($id);

        if(!$cars){
            abort(404);
        }
        return view('admin.cars.edit', compact('cars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mobil' => 'required',
            'harga_sewa' => 'required',
            'gambar' => 'required',
            'bahan_bakar' => 'required',
            'jumlah_kursi' => 'required',
            'transmisi' => 'nullable',
            'status' => 'required',
            'deskripsi' => 'required',
            'p3k' =>'required',
            'charger' => 'required',
            'audio' => 'required',
            'ac' => 'required',
        ]);

        $cars = Car::find($id);
        $cars->nama_mobil = $request->nama_mobil;
        $cars->harga_sewa = $request->harga_sewa;
        $cars->gambar = $request->gambar;
        $cars->bahan_bakar = $request->bahan_bakar;
        $cars->jumlah_kursi = $request->jumlah_kursi;
        $cars->transmisi = $request->transmisi;
        $cars->status = $request->status;
        $cars->deskripsi = $request->deskripsi;
        $cars->p3k = $request->p3k;
        $cars->charger = $request->charger;
        $cars->audio = $request->audio;
        $cars->ac = $request->ac;
        $cars->save();

        return redirect()->route('index')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cars = Car::find($id);
        $cars->delete();
        return redirect()->route('index')->with('success', 'Berhasil menghapus data');
    }

}
