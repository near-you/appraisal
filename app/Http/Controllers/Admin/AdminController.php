<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Profile;
use App\Models\SocialNetwork;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            //'user' => Auth::user(),
            'profiles' => Profile::all(),
            'contacts' => Contact::all(),
            'workExperiances' => WorkExperience::all(),
            'educations' => Education::all(),
            'social_networks' => SocialNetwork::all(),
        ]);
    }
}
