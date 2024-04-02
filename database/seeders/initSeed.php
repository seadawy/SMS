<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

use App\Models\Staff;
use App\Models\User;

class initSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ss = Staff::create([
            'name' => 'seadawy',
            'email' => 'k9335551@gmail.com',
            'password' => Hash::make('6452'),
        ]);

        User::create([
            'userId' => $ss['userId'],
            'role' => 'admin',
        ]);
    }
}
