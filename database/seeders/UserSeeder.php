<?php

namespace Database\Seeders;

use App\Models\Master\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            User::create([
                'ID_USER' => '1',
                'NAMA_USER' => 'superadmin',
                'USERNAME' => 'superadmin',
                'password' => Hash::make('123'),
                'EMAIL' => 'adyjuli.id',
                'NO_HP' => '11111',
                'WA' => '111221',
                'PIN' => '1234',
                'ID_JENIS_USER' => '1',
                'STATUS_USER' =>  '1',

            ]);
            echo 'Data berhasil masuk';
        } catch (\Throwable $th) {
            echo 'Gagal !! Data mungkin sudah ada';
        }
    }
}
