<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackeRequest;
use App\Models\Feedbacke;

class FeedbackeController extends Controller
{
    public function index()
    {
        return Feedbacke::all();
    }

    public function store(FeedbackeRequest $request)
    {
        return Feedbacke::create($request->validated());
    }

    public function show(Feedbacke $feedbacke)
    {
        return $feedbacke;
    }

    public function update(FeedbackeRequest $request, Feedbacke $feedbacke)
    {
        $feedbacke->update($request->validated());

        return $feedbacke;
    }

    public function destroy(Feedbacke $feedbacke)
    {
        $feedbacke->delete();

        return response()->json();
    }
}
