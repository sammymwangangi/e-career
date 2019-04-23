@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
  <div class="card p-3 shadow-lg border-0 mb-4 bg-white rounded">
    <div class="card-header">{{ $quiz->title }}</div>
    <div class="card-body">
      @forelse($questions as $question)
        <form>
          {{ $question->question }}
          <div class="form-group form-check">
            <input type="radio" class="form-check-input" name="answer" value="{{$question->option1}}" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">{{$question->option1}}</label>
          </div>
          <div class="form-group form-check">
            <input type="radio" class="form-check-input" name="answer" value="{{$question->option2}}" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">{{$question->option2}}</label>
          </div>
          <div class="form-group form-check">
            <input type="radio" class="form-check-input" name="answer" value="{{$question->option3}}" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">{{$question->option3}}</label>
          </div>
          <div class="form-group form-check">
            <input type="radio" class="form-check-input" name="answer" value="{{$question->option4}}" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">{{$question->option4}}</label>
          </div>
          <div class="form-group form-check">
            <input type="hidden" class="form-check-input" name="true_answer" value="{{$question->answer}}" id="exampleCheck1">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        
        @empty
        <div class="alert-danger text-center p-3 shadow-lg border-0 mb-4 rounded">
          <h2>No Questions Available!</h2>
        </div>
      @endforelse
    </div>
  </div>
</div>

 @endsection