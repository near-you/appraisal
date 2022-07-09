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
        $view_counter = Profile::query()->latest();
        $view_counter->increment('page_views_counter');

        return view('welcome', [
            'profiles' => Profile::all(),
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
