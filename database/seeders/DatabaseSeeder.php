<?php

namespace Database\Seeders;

use App\Models\Prospect;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProspectSeeder::class);
        Prospect::factory(50)->create();
        User::factory(100)->create();
    }
}
