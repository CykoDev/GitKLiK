@extends('layouts.app')
@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="text-center">
                                <h3>Create New Repository</h3>
                                <br>
                            </div>
                            <form method="POST" action="/repo">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            {{-- <span class="input-group-text"><i class="ni ni-hat-3"></i></span> --}}
                                            <input class="form-control" type="text" name="repoName"
                                                placeholder="Repository Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            {{-- <span class="input-group-text"><i class="ni ni-hat-3"></i></span> --}}
                                            <input class="form-control" type="text" name="repoDesc"
                                                placeholder="Repository Description">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Create additional files?</label>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="readme" value="readme"> Readme</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="gitignore" value="gitignore">
                                            Gitignore</label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary" type="submit" name="submit">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
</div>
@endsection
