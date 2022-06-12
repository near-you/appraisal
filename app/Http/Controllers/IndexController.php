<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Education;
use App\Models\Profile;
use App\Models\SocialNetwork;
use App\Models\WorkExpiriance;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'profiles' => Profile::all(),
            'contacts' => Contact::all(),
            'workExperiances' => WorkExpiriance::all(),
            'educations' => Education::all(),
            'social_networks' => SocialNetwork::all(),
        ]);
    }
}
