<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComplexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('complexes')->insert([
            ['name' => 'مجمع الياسمين'],
            ['name' => 'مجمع اليرموك'],
            ['name' => 'مجمع امباير سكوير'],
            ['name' => 'مجمع الفلوجة'],
            ['name' => 'مجمع مارينا'],
            ['name' => 'مجمع الساعة'],
            ['name' => 'مجمع شناشيل بغداد'],
            ['name' => 'مجمع طيبة'],
        ]);
    }
}
