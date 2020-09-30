@extends('backend.layouts.master')
@section('title',__('tr.Create New quiz'))

@section('content')
    <div class="kt-portlet__head-toolbar">

        <a href="{{ route('quizzes') }}"  class="btn btn-info">@lang('tr.back to list')</a>

    </div>



@endsection
