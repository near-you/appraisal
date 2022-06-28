<?php

namespace Database\Seeders;


use App\Models\Contact;
use App\Models\Education;
use App\Models\Hobbie;
use App\Models\Profile;
use App\Models\Reference;
use App\Models\Skill;
use App\Models\SocialNetwork;
use App\Models\User;
use App\Models\WorkExperience;
use App\Models\WorkExpiriance;
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
        User::factory()->create();
        Contact::factory()->create();
        Profile::factory()->create();
        WorkExperience::factory(2)->create();
        Education::factory(2)->create();
        Hobbie::factory(3)->create();
        Reference::factory(2)->create();
        Skill::factory()->create();
        SocialNetwork::factory(5)->create();
    }
}
