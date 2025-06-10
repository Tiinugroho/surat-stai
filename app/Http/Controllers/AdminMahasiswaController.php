<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminMahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = User::where('role', 'mahasiswa')->get();
        // Logic to retrieve and display a list of students
        return view('admin.mahasiswa.index',compact('mahasiswas'));
    }
}
