@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
@include('users.partials.header', [
'title' => $data['repoName'],
'description' => __(''),
'class' => 'col-lg-7'
])

<link href="{{ asset('css/codeCss.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboardCss.css') }}" rel="stylesheet">
<link href="{{ asset('css/buttons.css') }}" rel="stylesheet">

<div class="container-fluid mt--7">
    <div class="row">

        <div class="cardContainer col-xl-12 order-xl-1">
            <div class=" card bg-secondary shadow">



                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <h3 class="col-12 mb-0"><em>edit</em> {{ $data['fileName'] }}</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('profile.update') }}" autocomplete="off">

                    </form>

                    <form method="post" action="/{{ $data['userName'].'/repository/'.$data['repoName'].'/file' }}">
                        @csrf
                        <input type="hidden" name="relPath" value="{{ $data['relPath'] }}">
                        <input type="hidden" name="repoPath" value="{{ $data['repoPath'] }}">
                        <input type="hidden" name="userName" value="{{ $data['userName'] }}">
                        <textarea style="height:80vh" data-readonly="true" data-editor="php" class="form-control"
                            name="code">{!! $data['content'] !!}</textarea>

                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-grey mt-4">{{ __('Submit') }}</button>
                        </div>
                    </form>

                    @include('partials.editor')

                </div>

            </div>
        </div>
    </div>
    @include('layouts.footers.auth')
</div>





@endsection
