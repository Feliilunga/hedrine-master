@extends('layouts.user')

@section('content_dashboard')
    @include('partials.alerts', ['title' => 'Plantes actives'])
    @include('partials.table-add-del-view', ['allno' => false])
@endsection

@section('script')
   @include('partials.script-add-del-view')
@endsection
