<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Education;
use App\Models\Hobbie;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\SocialNetwork;
use App\Models\WorkExperience;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    public function index(): Factory|View|Application
    {
        $view_counter = Profile::query()->first();
        if (!empty($view_counter)) {
            $view_counter->increment('page_views_counter');
        }


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
