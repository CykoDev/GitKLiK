@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Import Repository'),
        'description' => __('Import an existing repository'),
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
                            <h3 class="col-12 mb-0">{{ __('Repository Name') }}</h3>
                        </div>
                    </div>
                    <div  class="card-body">
                        <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                    
                        </form>

                        <div class="container" style="height:150vh">
                        <textarea style="height:90%;width:100%" data-readonly="true" data-editor="php" class="form-control" name="code">{!! $data !!}</textarea>
                        <div class="text-center">
                        <a style="margin-top:2%" class="btn btn-grey" href="file/edit">Edit Code</a>
                        </div>
                        @include('partials.disabled_editor')
                        </div>

                       

                    </div>
                        
                    </div>
                </div>
            </div>
            
            @include('layouts.footers.auth')
        </div>
        
        
       
    
    
@endsection