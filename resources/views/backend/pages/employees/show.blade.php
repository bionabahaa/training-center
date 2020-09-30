@extends('backend.layouts.master')
@section('title',__('tr.show employee'))
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
                                       @lang('tr.show employee')
                                    </h3>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">
                                <a href="{{ route('employees') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
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
                                                <h3 class="m-form__heading-title">@lang('Employee Details')</h3>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('code'):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="code" class="form-control m-input"  disabled value="{{$employee->code }}">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*(First English Name):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="en_fname" class="form-control m-input"  disabled value="{{ $employee->en_fname }}">
                                                </div>
                                            </div>




                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*(First Arabic Name):</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="ar_fname" class="form-control m-input" disabled value="{{ $employee->ar_fname }}">
                                                </div>
                                            </div>





                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">* last English Name</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <div class="input-group">

                                                        <input type="text" name="en_lname" class="form-control m-input" disabled value="{{ $employee->en_lname }}">
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">* last Arabic  Name</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <div class="input-group">

                                                        <input type="text" name="ar_lname" class="form-control m-input" disabled value="{{ $employee->ar_lname }}">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*Email:</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="email" class="form-control m-input" disabled value="{{ $employee->email }}">
                                                </div>
                                            </div>




                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">* English  Address :</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="en_address" class="form-control m-input" disabled value="{{ $employee->en_address }}">
                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">* Arabic  Address :</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="ar_address" class="form-control m-input" disabled value="{{ $employee->ar_address }}">
                                                </div>
                                            </div>



                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">* Phone</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                        <input type="text" name="phone" class="form-control m-input" disabled value="{{ $employee->phone }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">* Mobile</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                        <input type="text" name="mobile" class="form-control m-input" disabled value="{{ $employee->mobile }}">
                                                    </div>
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
                                                <label class="col-xl-3 col-lg-3 col-form-label">* Birthday:</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="date" name="birthday" class="form-control m-input" placeholder="" value="{{ $employee->birthday }}">

                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Job:</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="job" class="form-control m-input" placeholder="" value="{{ $employee->job }}">

                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">* gender:</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <input type="text" name="gender" disabled class="form-control m-input"  value="{{ $employee->gender }}">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>



                                        <div class="m-form__heading">
                                            <h3 class="m-form__heading-title">
                                                @lang('More Details')
                                                <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="Some help text goes here"></i>
                                            </h3>

                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.Show Image')</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <div class="input-group">

                                                        <img src="{{ URL::to('/') }}/backend/dashboard_images/employee/Images/{{$employee->image }}" class="img-thumbnail" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.Show national_id')</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <div class="input-group">

                                                        <img src="{{ URL::to('/') }}/backend/dashboard_images/employee/Nationals/{{$employee->image_national_id }}" class="img-thumbnail" />
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="form-group m-form__group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">*@lang('tr.Show Contracts')</label>
                                                <div class="col-xl-9 col-lg-9">
                                                    <div class="input-group">

                                                        <img src="{{ URL::to('/') }}/backend/dashboard_images/employee/Contracts/{{$employee->image_contract}}" class="img-thumbnail" />
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