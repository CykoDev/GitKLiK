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
                            <h3 class="col-12 mb-0">{{ __('Edit Profile') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                    
                        </form>

								<div class="card">
								 <code class="code">
								 		#include <iostream> <br>
										using namespace std; <br>

										int main () <br>
										{ <br>
										/* local variable Initialization */   int n = 1,times=5; <br>
										<br>
										/* for loops execution */   for( n = 1; n <= times; n = n + 1 )<br>
										{ <br>
											cout << "C++ for loops: " << n <<endl; <br>
										} <br>
										return 0; <br>
										} <br>
								 
								 </code>
								</div>
                                
                                <div class="text-center">
                                    <button type="button" class="btn btn-success mt-4">{{ __('Import Repository') }}</button>
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