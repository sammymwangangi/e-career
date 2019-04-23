@extends('layouts.app')
@section('content')

<form method="get" action="{{route('result.create')}}">
	@csrf

	<div class="col-md-6 col-lg-6 col-sm-6 col-lg-offset-3">
		<h1>Search Your Result</h1>
	  <div class="form-group">
	    <label for="formGroupExampleInput2">Quiz Code</label>
	    <input type="text" name="quiz_code" class="form-control" id="formGroupExampleInput2" placeholder="E.g. A6xgP">
	  </div>
	  <button type="Submit" class="btn btn-success btn-block">Search</button>
	</div>

</form>

@endsection