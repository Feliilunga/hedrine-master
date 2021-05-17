@extends('layouts.user')

@section('content_dashboard')
    @include('partials.alerts', ['title' => 'DCI en Ettente'])
    @include('partials.table-edit-del-view', ['allno' => true])
@endsection

@section('script')
    @include('partials.script-add-del-view')
@endsection
