<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'santiago',
            'email' => 'santiagohuayhua8888@gmail.com',
            'password' => bcrypt('i love coding'),
            'number' => '949788695',
            'fb_url' => '',
            'inst_url' => '',
            'x_url' => '',
        ]);
    }
}
