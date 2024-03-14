<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $arrContacts = Contact::query()->orderBy('id', 'ASC')->paginate(5);
        return view('contacts.index', compact('arrContacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request): RedirectResponse
    {

        Contact::create([
            'name' => $request->input('name'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'status' => $request->input('status'),
        ]);

        return redirect()
            ->route('contact.index')
            ->with('success', 'Contact created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contact = Contact::query()->find($id);
        return view('contacts.info', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contact = Contact::query()->find($id);
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, $id)
    {


        Contact::find($id)->update([
            'name' => $request->input('name'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'status' => $request->input('status'),
        ]);
        dd($request->all());
        return redirect()
            ->route('contact.index')
            ->with('success', 'Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::query()->find($id)->delete();

        return redirect()
            ->route('contact.index')
            ->with('success', 'Contact deleted successfully.');
    }
}
