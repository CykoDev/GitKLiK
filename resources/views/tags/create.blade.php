@extends('layouts.app', ['title' => __('User Management')])

@section('content')
@include('users.partials.header', ['title' => __('Add Tags')])


<link href="{{ asset('css/plusButton.css') }}" rel="stylesheet">

<link href="{{ asset('css/buttons.css') }}" rel="stylesheet">

<div class="container-fluid mt--7">
    <div style="justify-content:center" class="row">
        <div class="col-xl-10 order-xl-1">    

            <div>
                <div style="margin-top:5%" class="bg-secondary card">
                    <div class="card-body">
                        <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                            @csrf


                            <div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                                    <div style="margin:auto; justify-content:flex-end" class="row">

                                        <button type="button" class="btn bg-secondary btn-circle"><i class="fa fa-times"></i></button>

                                    </div>

                                    <label class="form-control-label" for="input-name">{{ __('Tag') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Tag') }}" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Description') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Description') }}" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div style="margin:auto; justify-content:center" class="row">

                    <button type="button" class="btn btn-grey btn-circle"><i class="fa fa-plus"></i></button>


                </div>



                <div style="margin-top:5%" class="bg-secondary card">
                    <div class="card-body">
                        <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                            @csrf


                            <div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                                    <div style="margin:auto; justify-content:flex-end" class="row">

                                        <button type="button" class="btn bg-secondary btn-circle"><i class="fa fa-times"></i></button>

                                    </div>

                                    <label class="form-control-label" for="input-name">{{ __('Tag') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Tag') }}" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Description') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Description') }}" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div style="margin:auto; justify-content:center" class="row">

                    <button type="button" class="btn btn-grey btn-circle"><i class="fa fa-plus"></i></button>


                </div>




                <div style="margin-top:5%" class="bg-secondary card">
                    <div class="card-body">
                        <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                            @csrf


                            <div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                                    <div style="margin:auto; justify-content:flex-end" class="row">

                                        <button type="button" class="btn bg-secondary btn-circle"><i class="fa fa-times"></i></button>

                                    </div>

                                    <label class="form-control-label" for="input-name">{{ __('Tag') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Tag') }}" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Description') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Description') }}" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
                <br>

                <div style="margin:auto; justify-content:center" class="row">

                    <button type="button" class="btn btn-grey btn-circle"><i class="fa fa-plus"></i></button>


                </div>
                <br>
                <div class="submit col-12">
                    <button type="submit" class="btn btn-orange">Save Tags</button>
                </div>
                <br>



            </div>
            @include('layouts.footers.auth')
        </div>


    </div>
    @endsection
