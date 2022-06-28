<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactAddRequest;
use App\Http\Requests\ContactEditRequest;
use App\Models\Contact;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
            return view('admin.contact.index', [
                'contacts' => Contact::query()->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.contact.create',
            [
                'contact' => Contact::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ContactAddRequest $request
     * @return RedirectResponse
     */
    public function store(ContactAddRequest $request): RedirectResponse
    {
        Contact::query()->create(
            $request->all()
        );
        return redirect()->route('contact.index')->with(
            'status',
            'Contact was created!'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(int $id): View|Factory|Application
    {
        return view('admin.contact.show', [
            "contact" => Contact::query()->find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id): View|Factory|Application
    {
        return view('admin.contact.edit', [
            "contact" => Contact::query()->find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param ContactEditRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(ContactEditRequest $request, int $id): RedirectResponse
    {
        Contact::updateContactData($request, $id);
        return redirect()->route('contact.index')->with(
            'status',
            'Contact was updated!'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
