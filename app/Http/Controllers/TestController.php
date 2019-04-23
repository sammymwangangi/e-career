<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Test;
use App\Quiz;
use App\Question;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('test.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test= new Test;

        $sIdForValidate=$request->input('test_id');
        $quizCodeForValidate=$request->input('quiz_code');
        $initialScore=0;

        $checker=Test::where('test_id','=',$sIdForValidate)->where('uniqueid','=',$quizCodeForValidate)->count();
        if ($checker>0) {
            return "YOU ALREADY DONE THIS QUIZ";
        }else{
            $test = Test::create([
            'test_id' => $request->input('test_id'),
            'user_id' => Auth::user()->id,
            'uniqueid' => $request->input('quiz_code'),
            'score' =>$initialScore
            ]);

            $id=$request->input('quiz_code');
            $testRealId=$request->input('test_id');
            $test_id=Test::where('test_id',$testRealId)->value('id');
            $findtitle= Quiz::where('uniqueid',$id)->value('id');
            $findtime= Quiz::where('uniqueid',$id)->value('time');
            $title= Quiz::where('uniqueid',$id)->value('title');
            $questions=Question::where('quiz_id',$findtitle)->get();
            return view('answer.show')->with('questions', $questions)->with('test_id',$test_id)->with('title',$title)->with('time',$findtime);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
