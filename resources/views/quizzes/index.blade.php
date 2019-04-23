@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		@forelse($quizzes as $quiz)
		<div class="col-sm-6">
			<div class="card shadow-lg border-0 mb-4 bg-dark text-dark font-weight-bold rounded">
				<img src="{{ asset('images/1.jpg') }}" class="card-img" alt="...">
				<div class="card-body card-img-overlay">
					<h5 class="card-title">{{ $quiz->title }}</h5>
					<p class="card-text">Measure Yourself.Let's see what you can score in this test. Remember this test will help us know the best career for you.</p>
					<a href="{{ route('quizzes.show', [$quiz->id]) }}" class="btn btn-primary">Take Test</a>
					@empty
					<div class="alert-danger text-center p-3 shadow-lg border-0 mb-4 rounded">
						<h2>No Quizzes Available!</h2>
					</div>
				</div>
			</div>
		</div>
	  	@endforelse
	</div>
</div>

@endsection