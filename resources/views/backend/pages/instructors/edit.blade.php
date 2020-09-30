@extends('backend.layouts.master')
@section('title',__('tr.Update instructor'))
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

                        @lang('tr.Update instructor')
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <a href="{{ route('instructors') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
													<span>
														<i class="la la-arrow-left"></i>
														<span>@lang('tr.Back')</span>
													</span>
                </a>


            </div>

        </div>

        <!--begin::Form-->
        @include('backend.components.errors')
        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('update_instructors',$instructors->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-6">
                        <label>@lang('tr.Code'):</label>
                        <input type="text" name="code" id="code"  value="{{ $instructors->code }}" class="form-control m-input">

                    </div>

                    <div class="col-lg-6">
                        <label>@lang('tr.en_fname'):</label>
                        <input type="text" name="en_fname" id="en_fname" value="{{ $instructors->en_fname }}" class="form-control m-input" >

                    </div>
                    <div class="col-lg-6">
                        <label>@lang('tr.ar_fname'):</label>
                        <input type="text" name="ar_fname" id="ar_fname"  value="{{ $instructors->ar_fname }}" class="form-control m-input">

                    </div>


                    <div class="col-lg-6">
                        <label>@lang('tr.en_lname'):</label>
                        <input type="text" name="en_lname" id="en_lname" value="{{ $instructors->en_lname }}" class="form-control m-input" >

                    </div>
                    <div class="col-lg-6">
                        <label>@lang('tr.ar_lname'):</label>
                        <input type="text" name="ar_lname" id="ar_lname"  value="{{ $instructors->ar_lname }}" class="form-control m-input">

                    </div>


                    <div class="col-lg-6">
                        <label class="">@lang('tr.Email'):</label>
                        <input type="email" name="email" id="email" value="{{ $instructors->email }}"class="form-control m-input" >

                    </div>



                </div>
                <div class="form-group m-form__group row">

                    <div class="col-lg-4">
                        <label>@lang('tr.Address'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="address" id="address"  value="{{ $instructors->address }}" class="form-control m-input">
                            <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                        </div>

                    </div>




                    <div class="col-lg-4">
                        <label>@lang('tr.Phone'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="phone" id="phone" value="{{ $instructors->phone }}" class="form-control m-input">

                        </div>

                    </div>


                    <div class="col-lg-4">
                        <label>@lang('tr.birthday'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="date" name="birthday" id="birthday" value="{{ $instructors->birthday }}"  class="form-control m-input">

                        </div>

                    </div>

                    <div class="col-lg-4">
                        <label>@lang('tr.avilable_time'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="time" name="avilable_time" id="avilable_time" value="{{ $instructors->avilable_time }}"  class="form-control m-input">

                        </div>

                    </div>

                    <div class="col-lg-4">
                        <label>@lang('tr.shortbio'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="shortbio" id="shortbio" value="{{ $instructors->shortbio }}"  class="form-control m-input">

                        </div>

                    </div>


                    <div class="col-lg-4">
                        <label>@lang('tr.salary'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="salary" id="salary" value="{{ $instructors->salary }}"  class="form-control m-input">

                        </div>

                    </div>

                </div>



                <div class="col-lg-6">
                    <label class="col-lg-4 file">@lang('tr.Select another Image')</label>
                    <div class="col-md-8">
                        <input type="file" name="image" id="file" aria-label="File browser example"  onchange="readURL(this);"  />
                        <img src="{{ URL::to('/') }}/backend/dashboard_images/instructors/{{ $instructors->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $instructors->image }}" />
                        <img id="blah" src="#" alt="@lang('tr.your image')" />
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

