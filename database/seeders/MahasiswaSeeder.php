<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 50; $i++) {
            DB::table('mahasiswa')->insert([
                [
                    'Nim' => '194172' . $faker->randomNumber(4),
                    'Nama' => $faker->name(),
                    'Kelas' => 'TI-2D',
                    'Jurusan' => 'Teknologi Informasi',
                    'No_handphone' => '08' . $faker->randomNumber(8),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
            ]);
        }
    }
}
