@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card p-3 shadow-lg border-0 mb-5 bg-white rounded text-center">

                <div class="card-body">
                    <h2 class="card-title">Welcome {{Auth::user()->name }} {{Auth::user()->lname }}</h2>

                    <p class="lead mt-4 pt-5">Do you wish to ATTEMPT CAREER QUIZ or RE-ATTEMPT CAREER QUIZ?</p>

                    <a href="{{url('/subjects')}}" class="btn btn-success btn-lg mr-3">YES</a>
                    <a href="#" class="btn btn-warning btn-lg">NO</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
