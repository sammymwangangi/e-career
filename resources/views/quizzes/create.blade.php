@extends('layouts.app')

@section('content')

<div class="container justify-content-center">
	<div class="row">
		<div class="col-md-6">
			<div class="card p-3 shadow-lg border-0 mb-4 bg-white rounded">
				<div class="card-header border-0 bg-transparent">Create Quiz</div>
				<div class="card-body">
					<form action="{{ route('quizzes.store') }}" method="POST">
						@csrf
						<div class="form-group">
							<label>Title</label>
							<input type="text" class="form-control" name="title" required>
						</div>
						<div class="form-group">
							<label>Number Of Question</label>
							<input type="text" class="form-control" name="question_length" required>
						</div>
						<div class="form-group">
							<label>Set time</label>
							<input type="text" class="form-control" name="time" placeholder="Enter In Minute" required>
						</div>
						<div class="form-group">
							<input type="hidden" value="{{substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5)}}" name="uniqueid" class="form-control" id="formGroupExampleInput2">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection