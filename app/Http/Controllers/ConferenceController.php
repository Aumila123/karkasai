<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use App\Http\Requests\ConferenceRequest;
class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('conferences.index', compact('conferences'));
    }


    public function create()
    {
        return view('conferences.create');
    }

    public function store(ConferenceRequest $request)
    {
        $validated = $request->validated();
        Conference::create($validated);
        return redirect()->route('conferences.index') -> with('success', __('messages.conference_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Conference $conference)
    {
        return view('conferences.show', compact('conference'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conference $conference)
    {
        return view('conferences.edit', compact('conference'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ConferenceRequest $request, Conference $conference)
    {
        $validated = $request->validated();
        $conference->update($validated);
        return redirect()->route('conferences.index') -> with('success', __('messages.conference_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conference $conference)
    {
        $conference->delete();
        return redirect()->route('conferences.index') -> with('success', __('messages.conference_deleted'));
    }
}
