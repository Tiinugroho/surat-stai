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
            'username' => $row['username'],
            'name'     => $row['name'],
            'role'     => $row['role'],
            'password' => Hash::make($row['username']),
        ]);
    }
}