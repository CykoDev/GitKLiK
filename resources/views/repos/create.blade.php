@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Create a new Repository'),
        'description' => __("Let's get started!"),
        'class' => 'col-lg-7'
    ])   
   
	<link href="{{ asset('css/codeCss.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tabsCss.css') }}" rel="stylesheet">
    
    <div class="container-fluid mt--7">
       
            
            <div class="cardContainer col-xl-12 order-xl-1">
                <div class=" card bg-secondary shadow">
                   
                   
                   
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Give Your Repository A Name') }}</h3>
                        </div>
                    </div>
                    <div style="margin-top:3%;margin-bottom:1%" class="card-body">
                                
                                    <form>
                                        <input type="text" placeholder="Repository Title" class="form-control form-control-alternative">
                                    </form>
                                    
                                    <div class="text-center">
                                        <button type="button" class="btn btn-outline-success mt-4">{{ __('Import Existing Repository') }}</button>
                                        <button type="button" class="btn btn-success mt-4">{{ __('Create New Repository') }}</button>
                                    </div>
                    </div>

                    <div class="text-center">
                    <hr style="width:80%" >
                    </div>
                            


                            <div style="padding:2%">
                            <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab1">Importing Existing Repository</a></li>
                            <li><a data-toggle="tab" href="#tab2">Creating New Repository</a></li>
                            </ul>
                            
                            <div style="padding:2%; top:5px" class="card">
                            <div class="tab-content">
                            <div id="tab1" class="tab-pane fade show active">
                                <h3>HOME</h3>
                                <p>Some content.</p>
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <h3>Menu 1</h3>
                                <p>Some content in menu 1.</p>
                            </div>
                            
                            </div>
                            </div>
                            </div>

                    
                    </div>
                </div>
                @include('layouts.footers.auth')
            </div>
        
        
       
    </div>
    
@endsection