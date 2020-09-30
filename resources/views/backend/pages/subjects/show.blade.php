@extends('backend.layouts.master')
@section('title',__('tr.show subject'))
@section('stylesheet')

@endsection
@section('content')

    <div class="m-content">
        <div class="row">
            <div class="col-lg-12">

                <!--begin::Portlet-->
                <div class="m-portlet m-portlet--last m-portlet--head-lg m-portlet--responsive-mobile" id="main_portlet">
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
                                        @lang('tr.show subject')
                                    </h3>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">
                                <a href="{{ route('subjects') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
													<span>
														<i class="la la-arrow-left"></i>
														<span>@lang('tr.Back To List')</span>
													</span>
                                </a>


                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <form class="m-form m-form--label-align-left- m-form--state-" id="m_form">

                            <!--begin: Form Body -->
                            <div class="m-portlet__body">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2">
                                        <div class="m-form__section m-form__section--first">
                                            <div class="m-form__heading">
                                                <h3 class="m-form__heading-title">@lang('tr.subject Details')</h3>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.instructor_name'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="en_fname" class="form-control m-input"  disabled value="{{ $subjects->instructor->en_fname}}">
                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.course_topic'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="en_topic" class="form-control m-input"  disabled value="{{ $subjects->course->en_topic }}">
                                                </div>
                                            </div>



                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.en_name'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="en_name" class="form-control m-input" disabled value="{{ $subjects->en_name }}">
                                                </div>
                                            </div>



                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.ar_name'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="ar_name" class="form-control m-input" disabled value="{{ $subjects->ar_name }}">
                                                </div>
                                            </div>


                                        </div>


                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                        <div class="m-form__section">
                                            <div class="m-form__heading">
                                                <h3 class="m-form__heading-title">
                                                    @lang('More Details')
                                                    <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="Some help text goes here"></i>
                                                </h3>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">@lang('tr.date'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="date" name="date" class="form-control m-input" disabled value="{{ $subjects->date }}">

                                                </div>
                                            </div>




                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">@lang('tr.en_description'):</label>
                                                <div class="col-xl-9 col-lg-9">

                                                    <textarea name="en_description" id="ar_description" cols="30" rows="10" class="form-control m-input" disabled >
                                                       {{ $subjects->en_description }}</textarea>
                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">@lang('tr.ar_description'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <textarea name="ar_description" id="ar_description" cols="30" rows="10" class="form-control m-input" disabled >
                                                       {{ $subjects->ar_description }}</textarea>
                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">@lang('tr.location'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="location" class="form-control m-input" disabled value="{{ $subjects->location }}">

                                                </div>
                                            </div>






                                        </div>
                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>


                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!--end::Portlet-->
            </div>
        </div>
    </div>
@endsection



@section('javascript')


@endsection