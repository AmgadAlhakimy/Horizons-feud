<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnswerRequest;
use Illuminate\Http\Request;

class answer extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $questions = \App\Models\Question::all();
            return view('livewire.answer', compact('questions'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnswerRequest $request)
    {
        try {

            $index=0;
            foreach ($request->name as $answerText) {
            \App\Models\Answer::create([
                'name' => $request->name[$index],
                'value' => $request->value[$index],
                'question_id' => $request->question_id,
            ]);
                $index++;
            }

            return redirect()->back()->with(['success' => __('succeeded')]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
