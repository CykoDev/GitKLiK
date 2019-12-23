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
                                        <br>
                                        <input type="text" placeholder="Description" class="form-control form-control-alternative">
                                    
                                    <br>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-outline-success mt-4">{{ __('Import Existing Repository') }}</button>
                                        <button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success mt-4">{{ __('Create New Repository') }}</button>
                                    </div>
                                    
                                    
                                    </form>
                                    
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
                <!-- Modal -->
                  <div  style="margin-top:5%" class="modal fade" id="myModal" role="dialog">
                    <div style="height:90%" class="modal-dialog">
                        
                    <form>
                      <!-- Modal content-->
                      <div style="height:100%" class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Create a Repository</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                        </div>
                        
            
                        
                        <div class="modal-body">
                         <hr>
                          <p>Create Repository Using:</p>
                          
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="defaultChecked1" checked>
                              <label class="custom-control-label" for="defaultChecked1">.gitignore</label>
                            </div>
                            
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
                              <label class="custom-control-label" for="defaultChecked2">README.md</label>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                         <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-success" >Create Repository</button>
                        </div>
                      </div>
                    </form>  
                      

                    </div>
                  </div>
                @include('layouts.footers.auth')
            
        
        
       
    </div>
@endsection
