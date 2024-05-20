@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Welcome to Dashboard</h1>
            {{auth()->user()->name}}
            {{auth()->user()->email}}
        </div>
    </div>
</div>

@endsection