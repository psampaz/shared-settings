@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
    Admin area: Data List
@stop

@section('content')
<div class="row">
    {{-- data lists --}}
    @include('admin.data.data-table')
</div>
@stop

@section('footer_scripts')

@stop


