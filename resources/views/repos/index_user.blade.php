@extends('layouts.app')

@section('content')

<link href="{{ asset('css/dashboardCss.css') }}" rel="stylesheet">

<div class="header orangeGradient pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <h1>Explore Repositories</h1>
            <ul>
                @foreach($repos as $repo)
                <li>{{ $repo->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
