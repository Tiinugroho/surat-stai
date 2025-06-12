<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminMahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = User::where('role', 'mahasiswa')->get();
        // Logic to retrieve and display a list of students
        return view('admin.mahasiswa.index', compact('mahasiswas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'angkatan' => $request->angkatan,
            'program_study' => $request->program_study,
            'keterangan' => $request->keterangan,
            'role' => 'mahasiswa', // role mahasiswa
            'password' => Hash::make($request->username), // password dari username
        ]);

        return redirect()->back()->with('success', 'Mahasiswa berhasil ditambahkan!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $id,
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'angkatan' => $request->angkatan,
            'program_study' => $request->program_study,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back()->with('success', 'Data mahasiswa berhasil diupdate!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
