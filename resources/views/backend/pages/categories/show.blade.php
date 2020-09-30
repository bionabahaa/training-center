@extends('backend.layouts.master')
@section('title',__('tr.show section'))
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
                                        @lang('tr.show section')
                                    </h3>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">
                                <a href="{{ route('categories') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
													<span>
														<i class="la la-arrow-left"></i>
														<span>@lang('tr.back to list')</span>
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
                                                <h3 class="m-form__heading-title">@lang('tr.Section Details')</h3>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.en_title'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="en_title" disabled  class="form-control m-input" value="{{ $categories_data->en_title }}">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.ar_title'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="ar_title"  disabled class="form-control m-input" placeholder="" value="{{ $categories_data->ar_title }}">
                                                </div>
                                            </div>
                                           


                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.en_name'):</label>
                                                <div class="col-xl-9 col-lg-9"> 
                                                    <input type="text" name="en_name" disabled class="form-control m-input" value="{{ $categories_data->en_name }}">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.ar_name'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="ar_name" disabled class="form-control m-input" placeholder="" value="{{ $categories_data->ar_name }}">
                                                </div>
                                            </div>
                                           


                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.Show Image')</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <div class="input-group">

                                                        <img src="{{ URL::to('/') }}/backend/dashboard_images/categories/{{ $categories_data->image }}" class="img-thumbnail" />
                                                    </div>
                                                </div>
                                            </div>




                                        </div>




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