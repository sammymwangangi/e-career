<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Quiz;
use App\Option;

class IqtestController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // public function store(Request $request)
    // {
    //     $subject = Subject::create([
    //         'farmer_no' => $request->input('farmer_no'),
    //         'litres' => $request->input('litres'),
    //         'deliverer' => $request->input('deliverer'),
    //     ]);
    //     $subject->save();

    //     return redirect('iqtest')->with('success', 'subject created!');
    // }

    public function index()
    {
        $questions = Question::all();
        return view('iqtest', compact('questions'));
    }
}
