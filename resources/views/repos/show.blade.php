@extends('layouts.app')
@section('content')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Rank</h5>
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
                                    <h5 class="card-title text-uppercase text-muted mb-0">Stars</h5>
                                    <span class="h2 font-weight-bold mb-0">{{ $data['repo']->stars->count() }}</span>
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
                                    <h5 class="card-title text-uppercase text-muted mb-0">Directories</h5>
                                    <span
                                        class="h2 font-weight-bold mb-0">{{ count($data['latestCommits']['directories']) }}</span>
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
                                    <h5 class="card-title text-uppercase text-muted mb-0">Files</h5>
                                    <span
                                        class="h2 font-weight-bold mb-0">{{ count($data['latestCommits']['files']) }}</span>
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
    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Repository</h3>
                        </div>
                        {{-- <div class="col text-right">
                            <a href="#!" class="btn btn-sm btn-primary">See all</a>
                        </div> --}}
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Directory</th>
                                <th scope="col">Latest Commit</th>
                                <th scope="col">Since</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['latestCommits']['directories'] as $key => $value)
                            @if($key != '.git')
                            <tr>
                                <th scope="row">
                                    <a href="#">
                                        @if(strlen($key) > 20)
                                        {{ '/'.substr($key, 0, 17).'...' }}
                                        @else
                                        {{ '/'.$key }}
                                        @endif
                                    </a>
                                </th>
                                <td>
                                    @if(strlen($value['message']) > 80)
                                    {{ substr($value['message'], 0, 77).'...' }}
                                    @else
                                    {{ $value['message'] }}
                                    @endif
                                </td>
                                <td>
                                    {{ $value['date'] }}
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                        <!-- <thead class="thead-light">
                                <tr>
                                    <th scope="col">File</th>
                                    <th scope="col">Latest Commit</th>
                                    <th scope="col">Since</th>
                                </tr>
                            </thead> -->
                        <tbody>
                            @php
                            $readme = false;
                            @endphp
                            @foreach($data['latestCommits']['files'] as $key => $value)
                            <tr>
                                <th scope="row">
                                    @if($key == 'README.md')
                                    @php
                                    $readme = true;
                                    @endphp
                                    @endif
                                    <a href="#">
                                        @if(strlen($key) > 20)
                                        {{ substr($key, 0, 17).'...' }}
                                        @else
                                        {{ $key }}
                                        @endif
                                    </a>
                                </th>
                                <td>
                                    @if(strlen($value['message']) > 80)
                                    {{ substr($value['message'], 0, 77).'...' }}
                                    @else
                                    {{ $value['message'] }}
                                    @endif
                                </td>
                                <td>
                                    {{ $value['date'] }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @php
    $parsedown = new Parsedown();
    @endphp
    @if($readme)
    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card shadow">
                {{-- <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">README</h3>
                        </div>
                    </div>

                </div> --}}
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">
                                    <h3 class="mb-0">README</h3>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="card-body">

                    {!! $parsedown->text(file_get_contents($data['absPath'].'README.md')) !!}
                </div>
            </div>
        </div>
    </div>
    @endif
    @include('layouts.footers.auth')
</div>

@endsection
