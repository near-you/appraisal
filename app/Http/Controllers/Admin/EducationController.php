<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationAddRequest;
use App\Http\Requests\EducationEditRequest;
use App\Models\Education;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        return view('admin.education.index', [
            'educations' => Education::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.education.create',
            [
                'educations' => Education::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EducationAddRequest $request
     * @return RedirectResponse
     */
    public function store(EducationAddRequest $request): RedirectResponse
    {
        Education::query()->create(
            $request->all()
        );

        return redirect()->route('education.index')->with(
            'status',
            'Education was created!'
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
    public function edit(int $id): Application|Factory|View
    {
        return view('admin.education.edit', [
            "education" => Education::query()->find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EducationEditRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(EducationEditRequest $request, int $id): RedirectResponse
    {
        Education::updateEducationData($request, $id);
        return redirect()->route('education.index')->with(
            'status',
            'Education was updated!'
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
        Education::destroy($id);
        return redirect()->route('education.index')->with(
            'status',
            'Education deleted');
    }
}
