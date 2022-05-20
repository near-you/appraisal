<?php

namespace App\Http\Controllers;

use App\Models\AdminProfile;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $adminProfile = AdminProfile::all();

        return view('welcome', [
            'adminProfile' => $adminProfile
        ]);
    }
}
