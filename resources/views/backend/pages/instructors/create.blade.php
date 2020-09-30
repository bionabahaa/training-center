@extends('backend.layouts.master')
@section('title',__('tr.Create New instructor'))

@section('content')

    <!--begin::Portlet-->
    <div class="m-portlet">

        <div class="kt-portlet__head-toolbar">

            <a href="{{ route('instructors') }}"  class="btn btn-info">@lang('tr.back to list')</a>
        </div>
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>

                    <h3 class="m-portlet__head-text">

                        @lang('tr.Create New instructor')
                    </h3>
                </div>
            </div>
        </div>

        <!--begin::Form-->
        @include('backend.components.errors')
        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('store_instructors') }}" method="post" enctype="multipart/form-data" id="selectform">
            @csrf
            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-6">
                        <label>@lang('tr.Code'):</label>
                        <input type="text" name="code" id="code" class="form-control m-input" placeholder="@lang('tr.Enter instructor code')">
                        <span class="m-form__help">Please Enter instructor code</span>
                    </div>

                    <div class="col-lg-6">
                        <label>@lang('tr.en_fname'):</label>
                        <input type="text" name="en_fname" id="en_fname" class="form-control m-input" placeholder="@lang('tr.Enter First English name')">
                        <span class="m-form__help">Please Enter First Name</span>
                    </div>
                    <div class="col-lg-6">
                        <label>@lang('tr.ar_fname'):</label>
                        <input type="text" name="ar_fname" id="ar_fname" class="form-control m-input" placeholder="@lang('tr.Enter First Arabic Name')">
                        <span class="m-form__help">Please Enter Last Name</span>
                    </div>


                    <div class="col-lg-6">
                        <label>@lang('tr.en_lname'):</label>
                        <input type="text" name="en_lname" id="en_lname" class="form-control m-input" placeholder="@lang('tr.Enter Last English name')">
                        <span class="m-form__help">Please Enter First Name</span>
                    </div>
                    <div class="col-lg-6">
                        <label>@lang('tr.ar_lname'):</label>
                        <input type="text" name="ar_lname" id="ar_lname" class="form-control m-input" placeholder="@lang('tr.Enter Last Arabic Name')">
                        <span class="m-form__help">Please Enter Last Name</span>
                    </div>

                    <div class="col-lg-6">
                        <label class="">@lang('tr.Email'):</label>
                        <input type="email" name="email" id="email" class="form-control m-input" placeholder="@lang('tr.Enter your Email')">
                        <span class="m-form__help">Please Enter Last Email</span>
                    </div>





                    <div class="col-lg-6">
                        <label>@lang('tr.Phone'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="phone" id="phone" class="form-control m-input" placeholder="@lang('tr.Enter your phone')">
                            <span class="m-form__help">Please Enter your Phone</span>
                        </div>
                    </div>



                </div>
                <div class="form-group m-form__group row">

                        <div class="col-lg-4">
                            <label>@lang('tr.Address'):</label>
                            <div class="m-input-icon m-input-icon--right">
                                <input type="text" name="address" id="address" class="form-control m-input" placeholder="@lang('tr.Enter your Address')">
                                <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                            </div>
                            <span class="m-form__help">Please Enter your Address</span>
                        </div>




                    <div class="col-lg-4">
                        <label>@lang('tr.Birthday'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="date" name="birthday" id="birthday" class="form-control m-input" placeholder="@lang('tr.Enter your Birthday')">

                        </div>
                        <span class="m-form__help">Please Enter your Birthday</span>
                    </div>




                    <div class="col-lg-4">
                        <label>@lang('tr.Avilable_time'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="time" name="avilable_time" id="avilable_time" class="form-control m-input" placeholder="@lang('tr.Enter your avilable_time')">

                        </div>
                        <span class="m-form__help">Please Enter your avilable_time</span>
                    </div>
                    </div>



                </div>



                <div class="form-group m-form__group row">

                    <div class="col-lg-6">
                        <label class="">@lang('tr.Shortbio'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="shortbio" id="shortbio" class="form-control m-input" placeholder="@lang('tr.Enter your shortbio')">
                        </div>
                        <span class="m-form__help">Please Enter your shortbio</span>
                    </div>

                    <div class="col-lg-4">
                        <label class="">@lang('tr.Salary'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="number" name="salary" id="salary" class="form-control m-input" placeholder="@lang('tr.Enter your salary')">
                        </div>
                        <span class="m-form__help">Please Enter your salary</span>
                    </div>




                    <div class="col-lg-6">
                        <label class="col-lg-4 file">@lang('tr.Select  Image')</label>
                        <div class="col-md-8">
                            <input type="file" id="file"  name="image" aria-label="File browser example"  onchange="readURL(this);" />
                            <img id="blah" src="#" alt="@lang('tr.your image')"/>
                            <span class="file-custom"></span>
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
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>