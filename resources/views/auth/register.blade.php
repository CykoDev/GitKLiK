@extends('layouts.app', ['class' => 'bg-default'])

@section('content')

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    @include('layouts.headers.guest')

    <link href="{{ asset('css/registerCss.css') }}" rel="stylesheet">


        <div class="container mt--8 pb-5">
        <!-- Table -->



        <div class="row justify-content-center">


            <div class="registerForm col-lg-6 col-md-8 col-xs-10">

                <div class="card bg-secondary shadow border-0">

                    <div class="picCard">
                <div class="avatar-upload">

                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                </div>
                </div>
                <div class="avatar-edit">

                        <input class ="fas fa-pencil" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                </div>
            </div>
         </div>

                    <div class="card-body px-lg-5 ">

                        <p class="text-center text-muted mb-4">Sign Up</p>

                        <form role="form" method="POST" action="{{ route('register') }}">
                            @csrf

        <div id="register">

        <register-page
            :errors="{{ $errors->toJson() }}"
            :old="{{ json_encode(Session::getOldInput()) }}"
        ></register-page>

        </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<script type="text/javascript">

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);

        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    console.log("here");
    readURL(this);
});

</script>
@endsection

<script src="{{asset('js/app.js')}}" defer></script>




