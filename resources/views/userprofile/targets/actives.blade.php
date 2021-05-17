@extends('layouts.user')

@section('content_dashboard')
    @include('partials.alerts', ['title' => 'Targets actives'])
    @include('partials.table-edit-target-view', ['allno' => false])
@endsection

@section('script')
   @include('partials.script-add-del-view')
@endsection
