<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $admin = [
            'name' => 'SM Feroj 27',
            'email' => 'sm.feroj27@gmail.com',
            'password' => bcrypt('12345678')
        ];
        Admin::create($admin);
    }
}
