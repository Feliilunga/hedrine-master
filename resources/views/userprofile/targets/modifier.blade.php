@extends('layouts.user')

@section('content_dashboard')
    @include('partials.alerts', ['title' => 'Targets à modifier'])
    @include('partials.table-edit-target-view', ['edit' => true])
@endsection

@section('script')
    @include('partials.script-add-del-view')
@endsection
