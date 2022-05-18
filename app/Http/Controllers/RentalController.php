<?php
namespace App\Http\Controllers;

use App\Models\rent;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $data = rent::all();
        return view('rental/index', compact('data'));
    }
    public function create()
    {
        return view('rental/add');
    }
    public function ambilData(Request $request)
    {
        $this->validate($request,[
            'id_barang' => 'required|numeric|unique:rental2',
            'nama_barang' => 'required|min:2|max:60',
            'nama_penyewa' => 'required|min:2|max:100',
            'harga_sewa' => 'required|numeric',
            'jumlah_sewa' => 'required|numeric',
            'keterangan' => 'required|min:2|max:255',
        ]);
        $data = rent::create($request->all());
        // redirect
        return redirect(url('data-rental'));
        // dd($request->all());
    }
    public function destroy(rent $id){
        $id->delete();
        return redirect(url('data-rental'));

    }
    public function edit($id){
        $data = rent::find($id);
        // dd($data);
        return view('rental/edit', compact('data'));
    }
    public function update($id, Request $request){
        $data = rent::find($id);
         //    validasi update rental
        $rules = [
            'id_barang' => 'required|numeric|unique:rental2',
            'nama_barang' => 'required|min:2|max:60',
            'nama_penyewa' => 'required|min:2|max:100',
            'harga_sewa' => 'required|numeric',
            'jumlah_sewa' => 'required|numeric',
            'keterangan' => 'required|min:2|max:255',
        ];
        // validasi nim untuk nim agar tidak sama dengan nim yg lain(unique)
        if($request->id_barang != $data->id_barang) {
            $rules['id_barang'] = 'required|unique:rental2';
        }
        $validatedData = $request->validate($rules);
        // end validasi siswa
        $data->update($request->all());
        // redirect
        return redirect(url('data-rental'));
        // dd($request->all());
    }
   
}