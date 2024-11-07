<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\Jurusan;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Find the jurusan ID
        $jurusan = Jurusan::where('name', 'satu')->first();

        // Insert kelas data with jurusan_id
        if ($jurusan) {
            Kelas::create([
                'jurusan_id' => $jurusan->id,
                'name' => 'satu'
            ]);
        }
    }
}
