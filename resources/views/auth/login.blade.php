@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')

    <div id="app">
        <login-page></login-page>
    </div>

@endsection

<script src="{{asset('js/app.js')}}"></script>
