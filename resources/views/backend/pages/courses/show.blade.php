@extends('backend.layouts.master')
@section('title',__('tr.show course'))
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
                                        @lang('tr.show course')
                                    </h3>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">
                                <a href="{{ route('courses') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
													<span>
														<i class="la la-arrow-left"></i>
														<span>Back</span>
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
                                                <h3 class="m-form__heading-title">@lang('tr.courses Details')</h3>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.instructor_name'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="en_fname" class="form-control m-input"  disabled value="{{ $courses->instructor->en_fname}}">
                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.category_name'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="category_id" class="form-control m-input"  disabled value="{{ $courses->Categories->en_name}}">
                                                </div>
                                            </div>



                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.en_topic'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="en_topic" class="form-control m-input" disabled value="{{ $courses->en_topic }}">
                                                </div>
                                            </div>



                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.ar_topic'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="ar_topic" class="form-control m-input" disabled value="{{ $courses->ar_topic }}">
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
                                                <label class="col-xl-3 col-lg-3 col-form-label">@lang('tr.start_date'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="date" name="start_date" class="form-control m-input" disabled value="{{ $courses->start_date }}">

                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">* duration:</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="date" name="duration" class="form-control m-input" disabled  value="{{ $courses->duration }}">

                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">end_date:</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="date" name="end_date" class="form-control m-input" disabled value="{{ $courses->end_date }}">

                                                </div>
                                            </div>





                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">@lang('tr.en_description'):</label>
                                                <div class="col-xl-9 col-lg-9">

                                                    <textarea name="en_description" id="ar_description" cols="30" rows="10" class="form-control m-input" disabled >
                                                       {{ $courses->en_description }}</textarea>
                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">@lang('tr.ar_description'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <textarea name="ar_description" id="ar_description" cols="30" rows="10" class="form-control m-input" disabled >
                                                       {{ $courses->ar_description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">@lang('tr.course_level'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="course_level" class="form-control m-input" disabled value="{{ $courses->course_level }}">

                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">@lang('tr.price'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="price" class="form-control m-input" disabled value="{{ $courses->price }}">

                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">@lang('tr.location'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="location" class="form-control m-input" disabled value="{{ $courses->location }}">

                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">@lang('tr.course_hours'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="time" name="course_hours" class="form-control m-input" disabled value="{{ $courses->course_hours }}">

                                                </div>
                                            </div>




                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.Show Image')</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <div class="input-group">

                                                        <img src="{{ URL::to('/') }}/backend/dashboard_images/courses/{{ $courses->image }}" class="img-thumbnail" />
                                                    </div>
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