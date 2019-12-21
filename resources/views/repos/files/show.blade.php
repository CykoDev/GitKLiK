@extends('layouts.app')

@section('content')
<textarea style="height: 200px" data-readonly="true" data-editor="php" class="form-control"
    name="code">{!! $data !!}</textarea>
@include('partials.disabled_editor')
@endsection
