<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileEditRequest;
use App\Models\Profile;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        return view('admin.profile.index', [
            'profile' => Profile::query()->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.profile.create', [
            'profile' => Profile::query()->first(),
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id): View|Factory|Application
    {
        return view('admin.profile.edit', [
        "profile" => Profile::query()->find($id),
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProfileEditRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(ProfileEditRequest $request, int $id): RedirectResponse
    {
        Profile::updateProfile($id, $request);
        return redirect()->route('profile.index')->with(
            'status',
            'Profile was updated!'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        Profile::profileDestroy($id);
        return redirect()->route('profile.index')->with(
            'status',
            'Profile was updated!'
        );
    }
}
