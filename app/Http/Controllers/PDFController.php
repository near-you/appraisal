<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use App\Models\Education;
use App\Models\Hobbie;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\SocialNetwork;
use App\Models\WorkExperience;
use Barryvdh\DomPDF\Facade\Pdf;


class PDFController extends Controller
{
    public function generatePDF()
    {
        $profile = Profile::query()->first();
        $contacts = Contact::all();
        $workExperiences = WorkExperience::all();
        $educations = Education::all();
        $social_networks = SocialNetwork::all();
        $skills = Skill::all();
        $hobbies = Hobbie::all();

        $pdf = PDF::loadView('pdftemplate.index', compact('profile', 'contacts', 'workExperiences', 'educations', 'social_networks', 'skills', 'hobbies'));
        return $pdf->download('invoice.pdf');
    }

}
