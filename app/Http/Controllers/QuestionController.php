<?php

namespace App\Http\Controllers;

use App\Question;
use App\Quiz;
use App\Option;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $questions = Question::all();
        $quizzes = Quiz::all();
        return view('questions.index')->with('questions', $questions)->with('quizzes', $quizzes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $quizzes = Quiz::all();
        return view('questions.create')->with('quizzes', $quizzes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'option1' => 'required',
                'option2' => 'required',
                'option3' => 'required',
                'option4' => 'required',
                'answer' => 'required',
            ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $question= new Question;
        
        $question = Question::create([
            'quiz_id' => $request->input('quiz_id'),
            'question' => $request->input('question'),
            'option1' => $request->input('option1'),
            'option2' => $request->input('option2'),
            'option3' => $request->input('option3'),
            'option4' => $request->input('option4'),
            'answer' => $request->input('answer')
        ]);
        $id = $request->input('quiz_id');

        $questionCount=Question::where('quiz_id','=', $id)->count();

        $selectLenth=Quiz::where('id','=',$id)->value('question_length');
        //return $selectLenth;

        if ($questionCount < $selectLenth ) {
            $quiz = Quiz::find($id);
            return view('questions.create', ['quiz' => $quiz]);
        }else{
            $uniqueId=Quiz::where('id','=',$id)->value('uniqueid');
            return view('questions.index',['uniqueid' =>$uniqueId]);
        }
        // $question->save();

        // return redirect('questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
