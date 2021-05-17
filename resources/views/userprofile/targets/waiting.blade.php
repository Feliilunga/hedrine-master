@extends('layouts.user')

@section('content_dashboard')
    @include('partials.alerts', ['title' => 'Target en Ettente'])
    @include('partials.table-edit-target-view', ['allno' => true])
@endsection

@section('script')
    @include('partials.script-add-del-view')
@endsection
