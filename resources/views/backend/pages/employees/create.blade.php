@extends('backend.layouts.master')
@section('title',__('tr.Create New employee'))
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
                            @lang('tr.Create New employee')
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <a href="#" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
													<span>
														<i class="la la-arrow-left"></i>
														<span>Back</span>
													</span>
                    </a>


                </div>
            </div>
        </div>

        <!--begin::Form-->
        @include('backend.components.errors')
        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('store_employees') }}" method="post" enctype="multipart/form-data" id="selectform">
            @csrf
            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-6">
                        <label for ="code">@lang('tr.Code'):</label>
                        <input type="text" name="code" id="code" class="form-control m-input"  placeholder="@lang('tr.Enter employee code')">
                        <span class="m-form__help">Please Enter employee code</span>
                    </div>

                    <div class="col-lg-6">
                        <label for="en_fname">@lang('tr.en_Fname'):</label>
                        <input type="text" name="en_fname" id="en_fname" class="form-control m-input" placeholder="@lang('tr.Enter English First Name')">
                        <span class="m-form__help">Enter English First Name</span>
                    </div>


                    <div class="col-lg-6">
                        <label for="ar_fname">@lang('tr.ar_fname'):</label>
                        <input type="text" name="ar_fname" id="ar_fname" class="form-control m-input" placeholder="@lang('tr.Enter Arabic First Name')">
                        <span class="m-form__help">Enter Arabic First Name</span>
                    </div>




                    <div class="col-lg-6">
                        <label for="en_lname">@lang('tr.en_lname'):</label>
                        <input type="text" name="en_lname" id="en_lname" class="form-control m-input" placeholder="@lang('tr.Enter English Last Name')">
                        <span class="m-form__help">Enter English Last Name</span>
                    </div>


                    <div class="col-lg-6">
                        <label for="ar_lname">@lang('tr.ar_lname'):</label>
                        <input type="text" name="ar_lname" id="ar_lname" class="form-control m-input" placeholder="@lang('tr.Enter Arabic Last Name')">
                        <span class="m-form__help">Enter Arabic Last Name'</span>
                    </div>


                    <div class="col-lg-6">
                        <label for="en_address">@lang('tr.en_address'):</label>
                        <input type="text" name="en_address" id="en_address" class="form-control m-input" placeholder="@lang('tr.Enter English Address')">
                        <span class="m-form__help">Enter English Address</span>
                    </div>

                    <div class="col-lg-6">
                        <label for="ar_address">@lang('tr.ar_address'):</label>
                        <input type="text" name="ar_address" id="ar_address" class="form-control m-input" placeholder="@lang('tr.Enter Arabic Address')">
                        <span class="m-form__help">Enter English Address</span>
                    </div>



                    <div class="col-lg-6">
                        <label class="">@lang('tr.Email'):</label>
                        <input type="email" name="email" id="email" class="form-control m-input" placeholder="@lang('tr.Enter your Email')">
                        <span class="m-form__help">Please Enter Last Email</span>
                    </div>


                </div>
                <div class="form-group m-form__group row">

                    <div class="col-lg-4">
                        <label for="mobile">@lang('tr.Mobile'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="mobile" id="mobile" class="form-control m-input" placeholder="@lang('tr.Enter your Mobile')">
                            <span class="m-form__help">Please Enter your Mobile</span>
                        </div>

                    </div>


                    <div class="col-lg-4">
                        <label for="phone">@lang('tr.phone'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="phone" id="phone" class="form-control m-input" placeholder="@lang('tr.Enter your phone')">
                            <span class="m-form__help">Please Enter your Mobile</span>
                        </div>

                    </div>


                    <div class="col-lg-4">
                        <label for ="birthday">@lang('tr.Birthday'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="date" name="birthday" id="birthday" class="form-control m-input" placeholder="@lang('tr.Enter your Birthday')">

                        </div>
                        <span class="m-form__help">Please Enter your Birthday</span>
                    </div>

                </div>



                <div class="form-group m-form__group row">
                    <div class="col-lg-6">
                        <label class="">@lang('tr.Job'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="job" id="job" class="form-control m-input" placeholder="@lang('tr.Enter your Job')">
                        </div>
                        <span class="m-form__help">Please Enter your Job</span>
                    </div>
                    <div class="col-lg-4">
                        <label class="">@lang('tr.Gender'):</label>
                        <div class="m-radio-inline">
                            <label class="m-radio m-radio--solid">
                                <input type="radio" name="gender" id="gender"  checked value="male"> @lang('tr.Male')
                                <span></span>
                            </label>
                            <label class="m-radio m-radio--solid">
                                <input type="radio"name="gender" id="gender" value="female">@lang('tr.Female')
                                <span></span>
                            </label>
                        </div>
                        <span class="m-form__help">Please Enter your Gender</span>
                    </div>
                </div>



                <div class="col-lg-6">
                    <label class="col-lg-4 file">@lang('tr.Select  Image')</label>
                    <div class="col-md-8">
                        <input type="file" id="file"   name="image" aria-label="File browser example"  onchange="readURL(this);" />
                        <img id ="file1"  src="#" alt="@lang('tr.your image')"/>
                        <span class="file-custom"></span>
                    </div>

                </div>



                <div class="col-lg-6">
                    <label class="col-lg-4 file">@lang('tr.Select  image_national_id')</label>
                    <div class="col-md-8">
                        <input type="file" id="file"    name="image_national_id" aria-label="File browser example" onchange="readURL(this);"/>
                        <img id ="file2"  src="#" alt="@lang('tr.your image')"/>
                        <span class="file-custom"></span>
                    </div>

                </div>




                <div class="col-lg-6">
                    <label class="col-lg-4 file">@lang('tr.Select  image_contract')</label>
                    <div class="col-md-8">
                        <input type="file" id="file"   name="image_contract" aria-label="File browser example" onchange="readURL(this);" />
                        <img id ="file3"  src="#" alt="@lang('tr.your image')"/>
                        <span class="file-custom"></span>
                    </div>



                </div>


            </div>
            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions--solid">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-save"></i>&nbsp;@lang('tr.save')
                            </button>
                            <button type="reset" class="btn btn-accent reset">
                                <i class="la la-undo"></i>@lang('tr.reset')</button>
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

    <script>

        // Get all the reset buttons from the dom
        var resetButtons = document.getElementsByClassName('reset');

        // Loop through each reset buttons to bind the click event
        for(var i=0; i<resetButtons.length; i++){
            resetButtons[i].addEventListener('click', resetForm);
        }

        /**
         * Function to hard reset the inputs of a form.
         *
         * @param object event The event object.
         * @return void
         */
        function resetForm(event){

            event.preventDefault();

            var form = event.currentTarget.form;
            var inputs = form.querySelectorAll('input');

            inputs.forEach(function(input, index){
                input.value = null;
            });

        }
    </script>







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
    </script>

