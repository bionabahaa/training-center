@extends('backend.layouts.master')
@section('title',__('tr.Update employee'))
@section('stylesheet')
@endsection
@section('content')


    <!--begin::Portlet-->
    <div class="m-portlet">


        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>

                    <h3 class="m-portlet__head-text">

                        @lang('tr.Update employee')
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <a href="{{ route('employees') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
													<span>
														<i class="la la-arrow-left"></i>
														<span>@lang('tr.Back to list')</span>
													</span>
                </a>


            </div>

        </div>

        <!--begin::Form-->
        @include('backend.components.errors')
        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('update_employees',$employee->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-6">
                        <label>@lang('tr.Code'):</label>
                        <input type="text" name="code" id="code"  value="{{ $employee->code }}" class="form-control m-input">

                    </div>

                    <div class="col-lg-6">
                        <label>@lang('tr.en_fname'):</label>
                        <input type="text" name="en_fname" id="en_fname" value="{{ $employee->en_fname }}" class="form-control m-input" >

                    </div>

                    <div class="col-lg-6">
                        <label>@lang('tr.ar_fname'):</label>
                        <input type="text" name="ar_fname" id="ar_fname" value="{{ $employee->ar_fname }}" class="form-control m-input" >

                    </div>
                    <div class="col-lg-6">
                        <label>@lang('tr.en_lname'):</label>
                        <input type="text" name="en_lname" id="en_lname"  value="{{ $employee->en_lname }}" class="form-control m-input">

                    </div>

                    <div class="col-lg-6">
                        <label>@lang('tr.ar_lname'):</label>
                        <input type="text" name="ar_lname" id="ar_lname"  value="{{ $employee->ar_lname }}" class="form-control m-input">

                    </div>

                    <div class="col-lg-6">
                        <label class="">@lang('tr.Email'):</label>
                        <input type="email" name="email" id="email" value="{{ $employee->email }}"class="form-control m-input" >

                    </div>



                </div>
                <div class="form-group m-form__group row">

                    <div class="col-lg-4">
                        <label>@lang('tr.en_address'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="en_address" id="en_address"  value="{{ $employee->en_address }}" class="form-control m-input">
                            <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                        </div>

                    </div>




                    <div class="col-lg-4">
                        <label>@lang('tr.ar_address'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="ar_address" id="ar_address"  value="{{ $employee->ar_address }}" class="form-control m-input">
                            <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                        </div>

                    </div>



                    <div class="col-lg-4">
                        <label>@lang('tr.Mobile'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="mobile" id="mobile" value="{{ $employee->mobile }}" class="form-control m-input">

                        </div>

                    </div>



                    <div class="col-lg-4">
                        <label>@lang('tr.phone'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="phone" id="phone" value="{{ $employee->phone }}" class="form-control m-input">

                        </div>

                    </div>


                    <div class="col-lg-4">
                        <label>@lang('tr.Birthday'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="date" name="birthday" id="birthday" value="{{ $employee->birthday }}"  class="form-control m-input">

                        </div>

                    </div>

                </div>



                <div class="form-group m-form__group row">
                    <div class="col-lg-6">
                        <label class="">@lang('tr.Job'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="job" id="job" value="{{$employee->job }}" class="form-control m-input" >
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <label class="">@lang('tr.Gender'):</label>
                        <div class="m-radio-inline">
                            <label class="m-radio m-radio--solid">
                                <input type="radio" name="gender"  value="male"{{$employee->gender == 'male' ? 'checked' : ''}}>@lang('tr.Male')

                                <span></span>
                            </label>
                            <label class="m-radio m-radio--solid">
                                <input type="radio" name="gender"  value="female"{{$employee->gender == 'female' ? 'checked' : ''}}>@lang('tr.Female')

                                <span></span>
                            </label>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <label class="col-lg-4 file">@lang('tr.Select another Image')</label>
                        <div class="col-md-8">
                            <input type="file" name="image" id="file" aria-label="File browser example"  onchange="readURL(this);"  />
                            <img src="{{ URL::to('/') }}/backend/dashboard_images/employee/Images/{{ $employee->image }}" class="img-thumbnail" width="100" />

                            <img id="blah" src="#" alt="@lang('tr.your image')" />
                            <span class="file-custom"></span>
                        </div>



                    </div>







                    <div class="col-lg-6">
                        <label class="col-lg-4 file">@lang('tr.Select another Nationals')</label>
                        <div class="col-md-8">
                            <input type="file" name="image_national_id" id="file" aria-label="File browser example"  onchange="readURL(this);"  />
                            <img src="{{ URL::to('/') }}/backend/dashboard_images/employee/Nationals/{{ $employee->image_national_id }}" class="img-thumbnail" width="100" />

                            <img id="blah" src="#" alt="@lang('tr.your image_national_id')" />
                            <span class="file-custom"></span>
                        </div>



                    </div>





                    <div class="col-lg-6">
                        <label class="col-lg-4 file">@lang('tr.Select another Contracts')</label>
                        <div class="col-md-8">
                            <input type="file" name="image_contract" id="file" aria-label="File browser example"  onchange="readURL(this);"  />
                            <img src="{{ URL::to('/') }}/backend/dashboard_images/employee/Contracts/{{ $employee->image_contract }}" class="img-thumbnail" width="100" />

                            <img id="blah" src="#" alt="@lang('tr.your image_contract')" />
                            <span class="file-custom"></span>
                        </div>



                    </div>



                    </div>







                </div>


            </div>
            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions--solid">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-edit"></i>&nbsp;@lang('tr.Update')
                            </button>

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




        <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $(input).siblings("img").attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

    </Script>

