<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            'กองบริหารงานทั่วไป',
            'กองนโยบายและแผน',
            'กองเทคโนโลยีสารสนเทศ',
            'กองการเงินและพัสดุ',
            'กองกฎหมายและระเบียบ',
        ];

        foreach ($departments as $name) {
            Department::updateOrCreate(['name' => $name]);
        }
    }
}
