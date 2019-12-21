@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
@include('users.partials.header', [
'title' => __('Tags Description'),
'description' => __('Import an existing repository'),
'class' => 'col-lg-7'
])

<link href="{{ asset('css/codeCss.css') }}" rel="stylesheet">

<div class="container-fluid mt--7">
    <div class="row">

        <div class="cardContainer col-xl-12 order-xl-1">
            <div class=" card bg-secondary shadow">



                <div class="card-header bg-white border-0">
                    <div style="padding:5px;margin:1px;justify-content:space-between" class="row">
                        <h3 style="margin-top:auto" class="col-6 mb-0">{{ __('Tag Name') }}</h3>
                        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-dark"><i class="fa fa-edit"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('profile.update') }}" autocomplete="off">

                    </form>

                    <div class="card">
                        <span class="code">
                           
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis eum quas tempore cumque blanditiis ab, reiciendis enim consectetur autem exercitationem consequuntur totam repellendus, nobis minima eligendi expedita optio vel maxime.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil optio ipsam provident quae dignissimos, quaerat laboriosam modi cumque natus in, voluptatem maxime odio suscipit iusto laborum est pariatur soluta ipsa.
                                
                                        

                            </span>
                    </div>

                    <div class="text-center">
                        <button type="button" class="btn btn-secondary mt-4">{{ __('Go Back') }}</button>
                    </div>
                </div>
                
            </div>
        </div>
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
                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                        </form>


                    </div>
                </div>
    
    
    
    
    @include('layouts.footers.auth')
</div>



</div>

@endsection
