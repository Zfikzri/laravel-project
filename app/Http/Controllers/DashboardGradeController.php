<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class DashboardGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        return view('dashboard/class/all',[
                "title" => "Classes",
                "kelas" => Grade::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('class/create', [
            "title" => "Tambah Data Kelas"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $validatedata = $req -> validate(
            [
                'Nama' => 'required',
            ]);
        $result = Grade::create($validatedata);
        if ($result){
            return redirect()->route('class.all')->with('success','Data Kelas berhasil Ditambah!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kelas = Grade::findOrFail($id);

        return view('class/edit',[
                "title" => "Edit",
                "kelas" => Grade::findOrFail($id)
            ]
        );
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'Nama' => 'required|string|max:255',
            ]);

            $kelas = Grade::findOrFail($id);
            $kelas->update($request->all());

            return redirect()->route('class.all')->with('updated', 'Data berhasil diupdate.');
        } catch (\Exception $e) {
            return redirect()->route('class.all')->with('worked', 'Gagal mengupdate data. Silakan coba lagi.');
        }
    }

  
    public function destroy($id)
    {
        try {
            $kelas = Grade::findOrFail($id);
            $kelas->delete();

            return redirect()->route('class.all')->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('class.all')->with('worked', 'Gagal menghapus data. Silakan coba lagi.');
        }
    }

}