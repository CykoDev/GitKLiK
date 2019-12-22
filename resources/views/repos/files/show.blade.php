@extends('layouts.app')

@section('content')
<textarea style="height: 100vh" data-readonly="true" data-editor="php" class="form-control"
    name="code">{!! $data !!}</textarea>
<a class="btn btn-primary" href="file/edit">Edit Code</a>
@include('partials.disabled_editor')
@endsection
