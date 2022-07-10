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
use Illuminate\Http\Response;


class PDFController extends Controller
{
    public function generatePDF(): Response
    {
        $profile = Profile::query()->first();
        $contacts = Contact::all();
        $workExperiences = WorkExperience::all();
        $educations = Education::all();
        $social_networks = SocialNetwork::all();
        $skills = Skill::all();
        $hobbies = Hobbie::all();

        return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->setPaper('A4', 'portrait')->loadView('pdftemplate.index', compact('profile', 'contacts', 'workExperiences', 'educations', 'social_networks', 'skills', 'hobbies'))->stream();
//        return $pdf->download($profile->first_name . '_' . $profile->last_name. '_' . 'CV.pdf');
    }

}
