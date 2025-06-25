<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        if (empty($row['username']) || empty($row['role'])) {
            return null;
        }

        return new User([
            'name'     => $row['name'],
            'username' => $row['username'],
            'ttl' => $row['ttl'],
            'alamat' => $row['alamat'],
            'angkatan' => $row['angkatan'],
            'program_study' => $row['program_study'],
            'kode_prodi' => $row['kode_prodi'],
            'keterangan' => $row['keterangan'],
            'role'     => $row['role'],
            'password' => Hash::make($row['username']),
        ]);
    }
}