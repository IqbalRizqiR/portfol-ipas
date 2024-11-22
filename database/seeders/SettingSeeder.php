<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = Setting::create([
            'nama_kelompok' => 'Kelompok 1',
            'logo_kelompok' => 'logo_kelompok',
            'short_aboutus' => 'short_aboutus',
            'text_aboutus' => 'text_aboutus',
            'short_aboutproject' => 'short_aboutproject',
            'text_aboutproject' => 'text_aboutproject',
            'text_landasanteori' => 'text_landasanteori',
            'text_alat' => 'text_alat',
            'text_bahan' => 'text_bahan',
            'text_hasil' => 'text_hasil',
            'text_kesimpulan' => 'text_kesimpulan',
            'jadwalkegiatan' => 'jadwalkegiatan',
        ]);

    }
}
