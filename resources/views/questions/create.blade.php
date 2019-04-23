@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card p-3 shadow-lg border-0 mb-4 bg-white rounded">
				<div class="card-header border-0 bg-transparent">Create Questions System will redirect you when set is full</div>
				<div class="card-body">
					<form action="{{ route('questions.store') }}" method="POST">
						@csrf
						{{-- <div class="form-group">
							<label for="quiz">Quiz</label>
	                        <select class="form-control" name="quiz_id"  required data-validation-required-message= "quiz is required">
								@foreach($quizzes as $quiz)
	                            <option value="{{ $quiz->id }}">{{$quiz->title}}</option>
	                            @endforeach
	                        </select>
						</div> --}}
						<div class="form-group">
							<label>Question</label>
							<input type="text" class="form-control" name="question" required>
						</div>
						<div class="form-group">
							<label>Option1</label>
							<input type="text" class="form-control" name="option1" required>
						</div>
						<div class="form-group">
							<label>Option2</label>
							<input type="text" class="form-control" name="option2" required>
						</div>
						<div class="form-group">
							<label>Option3</label>
							<input type="text" class="form-control" name="option3" required>
						</div>
						<div class="form-group">
							<label>Option4</label>
							<input type="text" class="form-control" name="option4" required>
						</div>
						<div class="form-group">
							<label>Answer</label>
							<input type="text" class="form-control" name="answer" required>
						</div>
						<div class="form-group">
						<label for="quiz">Quiz ID</label>
						<input type="hidden" name="quiz_id" class="form-control" id="quiz" value="{{$quiz->id}}" readonly>
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