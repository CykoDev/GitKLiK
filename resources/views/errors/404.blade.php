@extends('errors::custom_http')

@section('title', __('Not Found!!!!!!!!!!!'))
@section('code', '404')
@section('message', __($exception->getMessage() ?: 'NOT FOUND!!!!!!!!'))
