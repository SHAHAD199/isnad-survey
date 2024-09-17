<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->insert([
            ['name' => 'دهوك'],
            ['name' => 'اربيل'],
            ['name' => 'نينوى'],
            ['name' => 'السليمانية'],
            ['name' => 'كركوك'],
            ['name' => 'صلاح الدين'],
            ['name' => 'ديالى'],
            ['name' => 'بغداد'],
            ['name' => 'الانبار'],
            ['name' => 'واسط'],
            ['name' => 'بابل'],
            ['name' => 'كربلاء'],
            ['name' => 'واسط'],
            ['name' => 'القادسية'],
            ['name' => 'النجف'],
            ['name' => 'ميسان'],
            ['name' => 'ذي قار'],
            ['name' => 'المثنى'],
            ['name' => 'البصرة']
        ]);
    }
}
