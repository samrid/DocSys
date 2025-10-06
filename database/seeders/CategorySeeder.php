<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::updateOrCreate(
            ['name' => 'ประกาศ / คำสั่ง / ข้อบังคับ'],
            ['slug' => Str::random(8)]
        );

        Category::updateOrCreate(
            ['name' => 'ตัวอย่างหนังสือ / แบบฟอร์ม'],
            ['slug' => Str::random(8)]
        );

        Category::updateOrCreate(
            ['name' => 'เอกสารอื่น ๆ'],
            ['slug' => Str::random(8)]
        );
    }
}
