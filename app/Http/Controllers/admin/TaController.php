<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Album;

class TaController extends Controller
{
    public function index()
    {
        $page = 'Tabel albums';
        $auth = Auth::guard('admin')->user());
        $albums = Album::all();
        return view('admin.Ta.index', compact('page', 'auth', 'albums'));
    }

    public function create()
    {
        return view('admin.Ta.tambah');
    }

    public function store(Request $request)
    {
        // Validation rules can be added here based on your requirements
        $data = $request->all();
        Album::create($data);

        return redirect()->route('displays-the-user-table.index')->with('success', 'album created successfully');
    }

    public function edit($id)
    {
        $album = Album::find($id);

        return view('admin.Ta.edit', compact('album'));
    }

    public function update(Request $request, $id)
    {
        // Validation rules can be added here based on your requirements
        $data = $request->all();
        $album = Album::find($id);
        $album->update($data);

        return redirect()->route('displays-the-user-table.index')->with('success', 'album updated successfully');
    }

    public function destroy($id)
    {
        $album = Album::find($id);
        $album->delete();

        return redirect()->route('displays-the-user-table.index')->with('success', 'album deleted successfully');
    }
}
