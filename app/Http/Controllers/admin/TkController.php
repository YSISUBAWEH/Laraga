<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kategori;

class TkController extends Controller
{
    public function index()
    {
        $page = 'Tabel kategoris';
        $auth = Auth::guard('admin')->user();
        $kategori = Kategori::all();
        return view('admin.Tk.index', compact('page', 'auth', 'kategori'));
    }

    public function create()
    {
        return view('admin.Tk.tambah');
    }

    public function store(Request $request)
    {
        // Validation rules can be added here based on your requirements
        $data = $request->all();
        Kategori::create($data);

        return redirect()->route('displays-the-kategori-table.index')->with('success', 'kategori created successfully');
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);

        return view('admin.Tk.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        // Validation rules can be added here based on your requirements
        $data = $request->all();
        $kategori = Kategori::find($id);
        $kategori->update($data);

        return redirect()->route('displays-the-kategori-table.index')->with('success', 'kategori updated successfully');
    }

    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();

        return redirect()->route('displays-the-kategori-table.index')->with('success', 'kategori deleted successfully');
    }
}
