<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialNetworkAddRequest;
use App\Http\Requests\SocialNetworkEditRequest;
use App\Models\SocialNetwork;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class SocialNetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('admin.socialnetwork.index', [
            'social_networks' => SocialNetwork::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.socialnetwork.create',
            [
                'social_networks' => SocialNetwork::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SocialNetworkAddRequest $request
     * @return RedirectResponse
     */
    public function store(SocialNetworkAddRequest $request): RedirectResponse
    {
        SocialNetwork::query()->create(
            $request->all()
        );

        return redirect()->route('social-network.index')->with(
            'status',
            'Contact was created!'
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
        return view('admin.socialnetwork.edit', [
            "social_network" => SocialNetwork::query()->find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SocialNetworkEditRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(SocialNetworkEditRequest $request, int $id): RedirectResponse
    {
        SocialNetwork::updateSocialNetworkData($request, $id);
        return redirect()->route('social-network.index')->with(
            'status',
            'Social Network was updated!'
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
        SocialNetwork::destroy($id);
        return redirect()->route('social-network.index')->with(
            'status',
            'Social Network was deleted');
    }
}
