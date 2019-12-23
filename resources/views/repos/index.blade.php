@extends('layouts.app')

@section('content')

@php
use App\User;
@endphp

<link href="{{ asset('css/dashboardCss.css') }}" rel="stylesheet">

<div class="header orangeGradient pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <h1>Explore Repositories</h1>
            <ul>
                @foreach($repos as $repo)
                <li><a href="/{{ User::find($repo->user_id)->name }}/repository/{{ $repo->name }}">{{ $repo->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
