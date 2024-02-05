<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TuController extends Controller
{
    public function index()
    {
        $page = 'Tabel Users';
        $auth = Auth::guard('admin')->user();
        $users = User::all();
        return view('admin.Tu.index', compact('page', 'auth', 'users'));
    }

    public function create()
    {
        return view('admin.Tu.tambah');
    }

    public function store(Request $request)
    {
        // Validation rules can be added here based on your requirements
        $data = $request->all();
        User::create($data);

        return redirect()->route('displays-the-user-table.index')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.Tu.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validation rules can be added here based on your requirements
        $data = $request->all();
        $user = User::find($id);
        $user->update($data);

        return redirect()->route('displays-the-user-table.index')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('displays-the-user-table.index')->with('success', 'User deleted successfully');
    }
}
