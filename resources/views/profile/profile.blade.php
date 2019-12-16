@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('This is your profile page. You can see the progress you\'ve made with your work and manage your projects or assigned tasks'),
        'class' => 'col-lg-7'
    ])   
    <link href="{{ asset('css/profileCustom.css') }}" rel="stylesheet">
    

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile dropShaddow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-info mr-4">{{ __('Connect') }}</a>
                            <a href="#" class="btn btn-sm btn-default float-right">{{ __('Message') }}</a>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading">22</span>
                                        <span class="description">{{ __('Friends') }}</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">{{ __('Photos') }}</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">{{ __('Comments') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{ auth()->user()->name }}<span class="font-weight-light">, 27</span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{ __('Bucharest, Romania') }}
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>{{ __('Solution Manager - Creative Tim Officer') }}
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>{{ __('University of Computer Science') }}
                            </div>
                            <hr class="my-4" />
                            <p>{{ __('Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.') }}</p>
                            <a class="btn btn-primary btn-sm" href="#">{{ __('Edit Profile') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class=" cardContainer bg-secondary shadow">
                   
                   
                    <!-- ------------------------------Fuck here---------------------------------------------------- -->
                    <h1 class="heading font-weight-bold text-uppercase text-muted mb-0">Seem's like things are working!</h1>
                    
                     <div class="cardContainer">
                        <div class="container-fluid">
                            <div class="header">
                                <!-- Card stats -->
                                <div class="row">
                                    <div  class="col-xl-6 col-lg-6">
                                        <div class="card card-stats mb-4 mb-xl-0">
                                            <div class="dropShaddow card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">Traffic</h5>
                                                        <span class="h2 font-weight-bold mb-0">350,897</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                            <i class="fas fa-chart-bar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-3 mb-0 text-muted text-sm">
                                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                                    <span class="text-nowrap">Since last month</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div  class="col-xl-6 col-lg-6">
                                        <div class="card card-stats mb-4 mb-xl-0">
                                            <div class="dropShaddow card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                                                        <span class="h2 font-weight-bold mb-0">2,356</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                            <i class="fas fa-chart-pie"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-3 mb-0 text-muted text-sm">
                                                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                                                    <span class="text-nowrap">Since last week</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding:1rem" class="col-xl-6 col-lg-6">
                                        <div class="card card-stats mb-4 mb-xl-0">
                                            <div class="dropShaddow card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                                                        <span class="h2 font-weight-bold mb-0">924</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                                            <i class="fas fa-users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-3 mb-0 text-muted text-sm">
                                                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                                                    <span class="text-nowrap">Since yesterday</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding:1rem" class="col-xl-6 col-lg-6">
                                        <div class="card card-stats mb-4 mb-xl-0">
                                            <div class="dropShaddow card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                                                        <span class="h2 font-weight-bold mb-0">49,65%</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                            <i class="fas fa-percent"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-3 mb-0 text-muted text-sm">
                                                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                                                    <span class="text-nowrap">Since last month</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection