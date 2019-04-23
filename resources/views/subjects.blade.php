@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-3 shadow-lg border-0 mb-4 bg-white rounded">
                <div class="card-header border-0 bg-info">{{ __('Please select your three(3) favourite science subjects') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('subjects.store') }}">
                        @csrf
                      <div class="form-group">
                        <label for="formGroupExampleInput">Favourite Subject One</label>
                        <select class="form-control" name="sub1"  required data-validation-required-message= "subject 1 is required">
                            <option value="Physics">Physics</option>
                            <option value="Biology">Biology</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Agricultural Science">Agricultural Science</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Geography">Geography</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput">Favourite Subject Two</label>
                        <select class="form-control" name="sub2"  required data-validation-required-message= "subject 2 is required">
                            <option value="Physics">Physics</option>
                            <option value="Biology">Biology</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Agricultural Science">Agricultural Science</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Geography">Geography</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Favourite Subject Three</label>
                        <select class="form-control" name="sub3"  required data-validation-required-message= "subject 3 is required">
                            <option value="Physics">Physics</option>
                            <option value="Biology">Biology</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Agricultural Science">Agricultural Science</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Geography">Geography</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success">Next / Submit</button>
                      </div>
                    </form>
                </div>
            </div>
            <a href="{{route('home')}}" class="btn btn-secondary">Go Back</a>
        </div>
    </div>
</div>
@endsection
