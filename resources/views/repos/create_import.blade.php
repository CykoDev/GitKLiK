@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Import Repository'),
        'description' => __('Import an existing repository'),
        'class' => 'col-lg-7'
    ])

	<link href="{{ asset('css/codeCss.css') }}" rel="stylesheet">

    <div class="container-fluid mt--7">
        <div class="row">

            <div class="cardContainer col-xl-12 order-xl-1">
                <div class=" card bg-secondary shadow">



                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Importing Repository: Instructions') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('repo.store', ['userName'=>Auth::user()->name]) }}" autocomplete="off">
                            @csrf
								<div class="card">
								 <code class="code">
								 		cd &lt;your-app-folder&gt;<br>
                                        git init<br>
                                        git remote add deploy {{ $data['absolutePath'] }}<br>
                                        <br>
                                        git add . <br>
                                        git commit -m "&lt;commit message&gt;"<br>
                                        git push deploy master

								 </code>
                                </div>

                                <input type="hidden" value='{{ $data['title'] }}' name='repoName'>

                                <div class="text-center">
                                    <button name='submit' value='importend' type="submit" class="btn btn-success mt-4">Import Repository</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('layouts.footers.auth')
        </div>



    </div>

@endsection
