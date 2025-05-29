<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class UserImportController extends Controller
{
    public function showImportForm()
    {
        return view('admin.import-users.index');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv'
        ]);

        Excel::import(new UsersImport, $request->file('file'));

        return back()->with('success', 'Data user berhasil diimport. Password default = Username masing-masing.');
    }
}