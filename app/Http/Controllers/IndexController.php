<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Education;
use App\Models\Hobbie;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\SocialNetwork;
use App\Models\WorkExperience;

class IndexController extends Controller
{
    public function index()
    {
        $view_counter = Profile::query()->first();
        $view_counter->increment('page_views_counter');

        return view('welcome', [
            'profile' => Profile::query()->first(),
            'contacts' => Contact::all(),
            'workExperiences' => WorkExperience::all(),
            'educations' => Education::all(),
            'social_networks' => SocialNetwork::all(),
            'skills' => Skill::all(),
            'hobbies' => Hobbie::all(),
            'view_counter' => $view_counter,
        ]);
    }
}
