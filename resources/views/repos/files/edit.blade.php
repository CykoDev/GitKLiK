@extends('layouts.app')

@section('content')
<form method="post" action="/{{ $data['userName'].'/repository/'.$data['repoName'].'/file' }}">
    @csrf
    <input type="hidden" name="relPath" value="{{ $data['relPath'] }}">
    <input type="hidden" name="repoPath" value="{{ $data['repoPath'] }}">
    <input type="hidden" name="userName" value="{{ $data['userName'] }}">
    <textarea style="height: 100vh" data-readonly="true" data-editor="php" class="form-control"
        name="code">{!! $data['content'] !!}</textarea>
    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
</form>
@include('partials.editor')
@endsection
