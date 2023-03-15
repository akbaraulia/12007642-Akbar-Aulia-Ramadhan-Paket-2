<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

               [ 'name' => 'Akbar Admin',
                'email' => 'admin@gmail.com',
                'nik' => '12007642',
                'no_telp' => '087828997630',
                'password' => bcrypt('password'),
                'role' => 'admin',
        ],
               [ 'name' => 'Akbar Petugas',
                'email' => 'petugas@gmail.com',
                'nik' => '12007644',
                'no_telp' => '08764213984',
                'password' => bcrypt('password'),
                'role' => 'petugas',
    ],
 [               'name' => 'Akbar Masyarakat',
                'email' => 'masyarakat@gmail.com',
                'nik' => '12007645',
                'no_telp' => '081283025653',
                'password' => bcrypt('password'),
                'role' => 'masyarakat',
],

];
        User::insert($data);

    }
}
