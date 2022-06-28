<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillAddRequest;
use App\Http\Requests\SkillEditRequest;
use App\Models\Skill;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('admin.skill.index', [
            'skills' => Skill::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        return view('admin.skill.create',
            [
                'skills' => Skill::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SkillAddRequest $request
     * @return RedirectResponse
     */
    public function store(SkillAddRequest $request): RedirectResponse
    {
        Skill::query()->create(
            $request->all()
        );

        return redirect()->route('skill.index')->with(
            'status',
            'Skill was created!'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
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
        return view('admin.skill.edit', [
            "skill" => Skill::query()->find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SkillEditRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(SkillEditRequest $request, int $id): RedirectResponse
    {
        Skill::updateSkillData($request, $id);
        return redirect()->route('skill.index')->with(
            'status',
            'Skill was updated!'
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
        Skill::destroy($id);
        return redirect()->route('skill.index')->with(
            'status',
            'Skill was deleted');
    }
}
