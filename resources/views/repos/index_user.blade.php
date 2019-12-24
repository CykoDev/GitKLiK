@extends('layouts.app',['title' => __('User Profile')])

@section('content')

@include('users.partials.header', [
        'title' => __('User Repositories'),
        
        'class' => 'col-lg-7'
    ])


@php
use App\User;
@endphp

<link href="{{ asset('css/tablerows.css') }}" rel="stylesheet">
<div class="container-fluid mt--7">
<div class="row">
<div class="cardContainer col-xl-12 order-xl-1">
<div class=" card bg-secondary shadow">

<link href="{{ asset('css/dashboardCss.css') }}" rel="stylesheet">


<div class="header pb-5 pt-5 pt-md-5">
    <div class="container-fluid">
        <div class="header-body">
            <h1>Explore Repositories</h1>
            <ul style="margin-top:2%" class="list-group">
                @foreach($repos as $repo)
                <li style="background:#494948" class="list-group-item"><a class="text-white" href="/{{ User::find($repo->user_id)->name }}/repository/{{ $repo->name }}">{{ $repo->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    </div>
</div>
</div>
</div>
</div>

@include('layouts.footers.auth')
@endsection
