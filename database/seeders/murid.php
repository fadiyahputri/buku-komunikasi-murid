<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class murid extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FAKER
        // $faker = Faker::create('id_ID');
        // for($i = 1; $i <= 1; $i++) {
        //     DB::table('murid')->insert([
        //         'nama_murid' => $faker->name,
        //         'kelas_id' => $faker->randomElement(['1', '3']),
        //         'nisn' => $faker->randomNumber(5, true),
        //         'jenis_kelamin' =>$faker->randomElement(['Perempuan', 'Laki-laki']),
        //         'alamat' => $faker->address,
        //         'no_telp' => $faker->randomNumber,
        //         'email' => $faker->email,
        //         'password' => $faker->password,
        //     ]);
        // }




        // DB::table('murid')->insert([
        //     'nama_murid' => 'septeaa',
        //     'kelas_id' => '1',
        //     'nisn' => '1324',
        //     'jenis_kelamin' => 'Perempuan',
        //     'alamat' => 'Depok',
        //     'no_telp' => '1233',
        //     'email' => 'septeaa@gmail.com',
        //     'password' => '111',
        // ]);
    }
}
