@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('subjects.store') }}>
                @csrf
            @foreach($questions as $question)
            
            <div class="card p-3 shadow-lg border-0 mb-4 bg-white rounded">
                <div class="card-header border-0 bg-info">{{ $question->question }}</div>
                <div class="card-body">    
                      <fieldset class="form-group">
                        <div class="row">
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                              <label class="form-check-label" for="gridRadios3">
                                @if($question->options)
                                    @foreach ($question->options as $option)
                                        <p>{{ $option->option }}</p>
                                    @endforeach
                                @endif
                              </label>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                </div>
            </div>
            @endforeach
            <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
            </form>
        </div>
    </div>
</div>
@endsection
