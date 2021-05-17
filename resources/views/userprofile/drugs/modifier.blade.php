@extends('layouts.user')

@section('content_dashboard')
    @include('partials.alerts', ['title' => 'DCI à modifier'])
    @include('partials.table-edit-del-view', ['edit' => true])
@endsection

@section('script')
    @include('partials.script-add-del-view')
@endsection
