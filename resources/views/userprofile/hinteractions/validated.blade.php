@extends('layouts.user')

@section('content_dashboard')
    @include('partials.alerts', ['title' => 'Hinteraction Targets actives'])
    @include('partials.table-edit-hinteraction-view', ['allno' => true])
@endsection

@section('script')
   /* @include('partials.script-add-del-view')*/
@endsection
