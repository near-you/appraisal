<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HobbieAddRequest;
use App\Http\Requests\HobbieEditRequest;
use App\Models\Hobbie;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HobbieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('admin.hobbies.index', [
            'hobbies' => Hobbie::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.hobbies.create', [
                'hobbies' => Hobbie::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param HobbieAddRequest $request
     * @return RedirectResponse
     */
    public function store(HobbieAddRequest $request): RedirectResponse
    {
        Hobbie::query()->create(
            $request->all()
        );

        return redirect()->route('hobbies.index')->with(
            'status',
            'Hobby was created!'
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
        return view('admin.hobbies.edit', [
            "hobby" => Hobbie::query()->find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param HobbieEditRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(HobbieEditRequest $request, int $id): RedirectResponse
    {
        Hobbie::updateHobbiesData($request, $id);
        return redirect()->route('hobbies.index')->with(
            'status',
            'Hobby was updated!'
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
        Hobbie::destroy($id);
        return redirect()->route('hobbies.index')->with(
            'status',
            'Hobby was deleted');
    }
}
