<?php
namespace Database\Seeders;

use App\Imports\UsersImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class UsersExcelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new UsersImport, database_path('data/mahasiswa_pai.xlsx'));
    }
}
