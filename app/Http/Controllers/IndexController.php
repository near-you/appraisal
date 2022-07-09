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
        $post = Profile::query()->latest(); // fetch post from database
        $post->increment('page_views_counter'); // add a new page view to our 'views' column by incrementing it

        return view('welcome', [
            'profiles' => Profile::all(),
            'contacts' => Contact::all(),
            'workExperiences' => WorkExperience::all(),
            'educations' => Education::all(),
            'social_networks' => SocialNetwork::all(),
            'skills' => Skill::all(),
            'hobbies' => Hobbie::all(),
            'post' => $post,
        ]);
    }
}
