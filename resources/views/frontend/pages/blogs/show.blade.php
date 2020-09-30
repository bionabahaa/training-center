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
                                <a href="{{ route('blog') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
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

                                            <div class="col-lg-6">
                        <label for="en_name">@lang('tr.show en_name'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="en_name" id="en_name"  disabled class="form-control m-input" value="{{ $blogs_data->en_name }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_name">@lang('tr.show ar_name'):</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text" name="ar_name" id="ar_name" disabled  class="form-control m-input" value="{{ $blogs_data->ar_name }}" >
                        </div>
                    </div>


                    
                   





                    <div class="col-lg-6">
                        <label for="date">@lang('tr.date'):</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="date" name="date" id="date" disabled  class="form-control m-input" value="{{ $blogs_data->date }}">
                        </div>
                    </div>

           


                    <div class="col-lg-6">
                        <label for="en_description">@lang('tr.show en_description'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <textarea name="en_description" id="en_description" cols="30" rows="10" class="form-control m-input" disabled >{{ $blogs_data->en_description }}</textarea>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_description">@lang('tr.show ar_description'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <textarea name="ar_description" id="ar_description" cols="30" rows="10" class="form-control m-input" disabled >
                            {{ $blogs_data->ar_description }}</textarea>

                        </div>
                    </div>



                  








                                     
                               


                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.Show Image')</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <div class="input-group">

                                                        <img src="{{ URL::to('/') }}/frontend/website_images/blogs/{{ $blogs_data->image }}" class="img-thumbnail" />
                                                    </div>
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