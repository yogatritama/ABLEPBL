<?php

use Illuminate\Database\Seeder;
use App\Tutor;
use App\Mahasiswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tutor::create([
            'name' => 'Tutor',
            'email' => 'tutor@ablepbl.com',
            'password' => Hash::make('tutor'),
            'remember_token' => str_random(10),
            'role' => '1',
            'institution' => 'Unpad'
        ]);
        Mahasiswa::create([
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@ablepbl.com',
            'password' => Hash::make('mahasiswa'),
            'remember_token' => str_random(10),
            'role' => '2',
            'institution' => 'Unpad'
        ]);
    }
}
