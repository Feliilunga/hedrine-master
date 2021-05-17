@extends('layouts.user')

@section('content_dashboard')
    @include('partials.alerts', ['title' => 'Hinteraction Targets à modifier'])
    @include('partials.table-edit-hinteraction-view', ['edit' => true])
@endsection

@section('script')
    @include('partials.script-add-del-view')
@endsection
