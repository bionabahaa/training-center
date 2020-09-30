@extends('backend.layouts.master')
@section('title',__('tr.Update subject'))
@section('stylesheet')
@endsection
@section('content')


    <!--begin::Portlet-->
    <div class="m-portlet">

        <div class="m-portlet__head">
            <div class="m-portlet__head-progress">

                <!-- here can place a progress bar-->
            </div>
            <div class="m-portlet__head-wrapper">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
													<span class="m-portlet__head-icon">
														<i class="flaticon-map-location"></i>
													</span>
                        <h3 class="m-portlet__head-text">
                            @lang('tr.Update subject')
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <a href="{{ route('subjects') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
													<span>
														<i class="la la-arrow-left"></i>
														<span>@lang('tr.back to list')</span>
													</span>
                    </a>


                </div>
            </div>
        </div>

        <!--begin::Form-->
        @include('backend.components.errors')
        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('update_subjects',$subjects->id) }}" method="post" enctype="multipart/form-data" id="selectform">
            @csrf
            <div class="m-portlet__body">

                <div class="form-group m-form__group row">

                    <div class="col-lg-6">
                        <label for="en_topic">@lang('tr.en_name'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="en_name" id="en_name"  value="{{ $subjects->en_name }}" class="form-control m-input">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_title">@lang('tr.ar_name'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="ar_name" id="ar_name"  value="{{ $subjects->ar_name }}" class="form-control m-input">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <label for="en_description">@lang('tr.en_description'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <textarea name="en_description" id="en_description" cols="30" rows="10" class="form-control m-input"  value="">{{ $subjects->en_description }}</textarea>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_description">@lang('tr.ar_description'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <textarea name="ar_description" id="ar_description" cols="30" rows="10" class="form-control m-input" value="">{{ $subjects->ar_description }}</textarea>

                        </div>
                    </div>


                    <div class="col-lg-6">
                        <label for="date">@lang('tr.date'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="date" name="date" id="date"  value="{{ $subjects->date }}" class="form-control m-input">
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <label for="location">@lang('tr.location'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="location" id="location"  value="{{ $subjects->location }}" class="form-control m-input">
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <label for="course_id">@lang('tr.course')</label>
                        <select name="course_id" id="course_id" class="form-control" required>
                            <option value="">@lang('tr.Select another course')</option>
                            @foreach ($courses as $course)
                                @if($subjects->course_id == $course->id)
                                    <option value="{{ $course->id }}" selected>{{ $course->topic }}</option>
                                @else
                                    <option value="{{ $course->id }}">{{ $course->topic }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>


                    <div class="col-lg-6">
                        <label for="instructor_id">@lang('tr.instructor')</label>
                        <select name="instructor_id" id="instructor_id" class="form-control" required>
                            <option value="">@lang('tr.Select Category')</option>
                            @foreach ($instructors as $instructor)
                                @if($subjects->instructor_id == $instructor->id)
                                    <option value="{{ $instructor->id }}" selected>{{ $instructor->fname }}</option>
                                @else
                                    <option value="{{ $instructor->id }}">{{ $instructor->fname }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions--solid">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-8">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;@lang('tr.update')
                                </button>
                                <button type="reset" class="btn btn-accent reset">
                                    <i class="la la-undo"></i>@lang('tr.reset')</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>

    <!--end::Portlet-->


@endsection

@section('javascript')

