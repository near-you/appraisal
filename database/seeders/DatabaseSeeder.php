<?php

namespace Database\Seeders;

use App\Models\AdminProfile;
use App\Models\AdminUser;
use App\Models\User;
use Database\Factories\AdminUserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(5)->create();

         AdminUser::factory(1)->create([
             "name" => "Admin",
             "email" => "admin@admin.com",
             "password" => bcrypt("12345")
         ]);

         AdminProfile::factory(1)->create();
    }
}
