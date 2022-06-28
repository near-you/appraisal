<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkExperienceAddRequest;
use App\Http\Requests\WorkExperienceEditRequest;
use App\Models\WorkExperience;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WorkExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('admin.workexperience.index', [
            'work_experiences' => WorkExperience::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.workexperience.create',
            [
                'work_experiences' => WorkExperience::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param WorkExperienceAddRequest $request
     * @return RedirectResponse
     */
    public function store(WorkExperienceAddRequest $request): RedirectResponse
    {
        WorkExperience::query()->create(
            $request->all()
        );

        return redirect()->route('work-experience.index')->with(
            'status',
            'Work Experience was created!'
        );
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
        return view('admin.workexperience.edit', [
            "work_experience" => WorkExperience::query()->find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param WorkExperienceEditRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(WorkExperienceEditRequest $request, int $id): RedirectResponse
    {
        WorkExperience::updateWorkExperianceData($request, $id);
        return redirect()->route('work-experience.index')->with(
            'status',
            'Work Experience was updated!'
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
        WorkExperience::destroy($id);
        return redirect()->route('work-experience.index')->with(
            'status',
            'Work Experience deleted');
    }
}
