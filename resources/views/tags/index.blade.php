@extends('layouts.app', ['title' => __('User Management')])

@section('content')
<link href="{{ asset('css/dashboardCss.css') }}" rel="stylesheet">
<link href="{{ asset('css/buttons.css') }}" rel="stylesheet">

<div class="header orangeGradient pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Rankkk</h5>
                                    <span class="h2 font-weight-bold mb-0">SUPAHOT</span>
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
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Stars</h5>
                                    <span class="h2 font-weight-bold mb-0">21212</span>
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
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Repositories</h5>
                                    <span class="h2 font-weight-bold mb-0">134</span>
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
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Commits</h5>
                                    <span class="h2 font-weight-bold mb-0">643</span>
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
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Tags') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a style="background:#1E1E1E;color:white;" href="{{ route('user.create') }}" class="btn btn-sm">{{ __('Add Tags') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">{{ __('Tag Name') }}</th>
                                <th scope="col">{{ __('Description') }}</th>
                                <th scope="col">{{ __('Creation Date') }}</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <!---------------------------------------------Listings end----------------------------------------------->

                            <tr>
                                <td>"Tag Name"</td>
                                <td>
                                    Description
                                </td>
                                <td> Date</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                            <form action="" method="post">
                                                @csrf
                                                @method('delete')

                                                <a class="dropdown-item" href="#" </a> <button type="button" class="text-center dropdown-item" onclick="confirm('{{ __(" Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                {{ __('Delete') }}
                                                            </button>
                                                        </form>    
                                                  
                                                        <a class=" text-center dropdown-item" data-toggle="modal" data-target="#myModal" href="{{ route('profile.edit') }}">{{ __('Edit') }}</a>

                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>"Tag Name"</td>
                                <td>
                                    Description
                                </td>
                                <td> Date</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                            <form action="" method="post">
                                                @csrf
                                                @method('delete')

                                                <a class="dropdown-item" href="#" </a> <button type="button" class="text-center dropdown-item" onclick="confirm('{{ __(" Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                {{ __('Delete') }}
                                                            </button>
                                                        </form>    
                                                  
                                                        <a class=" text-center dropdown-item" data-toggle="modal" data-target="#myModal" href="{{ route('profile.edit') }}">{{ __('Edit') }}</a>

                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>"Tag Name"</td>
                                <td>
                                    Description
                                </td>
                                <td> Date</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                            <form action="" method="post">
                                                @csrf
                                                @method('delete')

                                                <a class="dropdown-item" href="#" </a> <button type="button" class=" text-center dropdown-item" onclick="confirm('{{ __(" Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                {{ __('Delete') }}
                                                            </button>
                                                        </form>    
                                                  
                                                        <a class=" text-center dropdown-item" data-toggle="modal" data-target="#myModal" href="{{ route('profile.edit') }}">{{ __('Edit') }}</a>

                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!---------------------------------------------Listings end----------------------------------------------->



                        </tbody>
                    </table>
                </div>

                <!-- Modal -->
                <div style="margin-top:5%" class="modal fade" id="myModal" role="dialog">
                    <div style="height:90%" class="modal-dialog">

                        <form>
                            <!-- Modal content-->
                            <div style="height:100%" class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Tag</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                </div>


                                <form>
                                    <div class="modal-body">


                                        <input type="text" placeholder="Tag Name" class="form-control form-control-alternative">
                                        <br>
                                        <input type="text" placeholder="Description" class="form-control form-control-alternative">

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-grey" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-orange">Save</button>
                                    </div>
                                </form>
                            </div>
                        </form>


                    </div>
                </div>

                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">

                    </nav>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>
@endsection
