<?php

namespace App\Http\Controllers;

use App\Models\AdminProfile;
use App\Models\AdminUser;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $adminProfile = AdminProfile::all();
        $adminName = AdminUser::query()->first('name');

        return view('welcome', [
            "profile" => $adminProfile,
            "admin_name" => $adminName,
        ]);
    }
}
