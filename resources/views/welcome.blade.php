@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{ route('login') }}">
                    <img class="img-fluid" src="{{ url('logo.jpeg') }}" />
                </a>
            </div>
        </div>
    </div>
@endsection
