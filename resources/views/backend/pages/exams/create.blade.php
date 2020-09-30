@extends('backend.layouts.master')
@section('title',__('tr.Create New exam'))

@section('content')
    <div class="kt-portlet__head-toolbar">

        <a href="{{ route('exams') }}"  class="btn btn-info">@lang('tr.back to list')</a>

    </div>



@endsection
