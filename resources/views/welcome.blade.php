@extends('layouts.app', ['class' => 'bg-default'])
<link href="{{ asset('css/dashboardCss.css') }}" rel="stylesheet">
@section('content')
    <div class="header orangeGradient py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 style="font-size:32px" class="text-white">{{ __('Welcome to Git Klik.') }}</h1>
                        <p class="text-white">{{ __('A version control site for ddevelopers and open source development') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div  class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon style="fill:#FF5206" class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
