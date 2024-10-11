<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'feedback' => 'required|in:excellent,good,poor',
            'stars' => 'required|integer|min:1|max:5',
            'message' => 'required'
        ]);

        Feedback::create($validatedData);

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}
