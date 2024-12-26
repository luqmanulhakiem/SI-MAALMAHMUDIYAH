<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gurus = [
            ["nama" => "Hj. Djumaati, S.Pd.I", "jenis_kelamin" => "P"],
            ["nama" => "Aufal Widad, S.Pd", "jenis_kelamin" => "P"],
            ["nama" => "Nuril Qodariyah, S.Pd", "jenis_kelamin" => "P"],
            ["nama" => "Fatmawati, SH", "jenis_kelamin" => "P"],
            ["nama" => "Siti Shofiati Astuti, S.Pd", "jenis_kelamin" => "P"],
            ["nama" => "Syaiful Anam, S.Pd", "jenis_kelamin" => "L"],
            ["nama" => "Moh. Rusli, S.Pd.I", "jenis_kelamin" => "L"],
            ["nama" => "Siti Fadilah, S.Pd", "jenis_kelamin" => "P"],
            ["nama" => "Syukriyatul Qinanah, S.Pd", "jenis_kelamin" => "P"],
            ["nama" => "Yanti Damayanti, S.Kom", "jenis_kelamin" => "P"],
            ["nama" => "Fitrotul Ulya, S.Pd", "jenis_kelamin" => "P"],
            ["nama" => "Azizatun Nabila, S.Pd", "jenis_kelamin" => "P"],
        ];

        Guru::insert($gurus);
    }
}
