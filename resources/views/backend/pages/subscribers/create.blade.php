@extends('backend.layouts.master')
@section('title',__('tr.Create New subscriber'))
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
                            @lang('tr.Create New subscriber')
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <a href="{{ route('subscribers') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
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
        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('store_subscribers') }}" method="post" enctype="multipart/form-data" id="selectform">
            @csrf
            <div class="m-portlet__body">
                <div class="form-group m-form__group row">

                    <div class="col-lg-4">
                        <label for="en_fname">@lang('tr.En_Fname'):</label>
                        <input type="text" name="en_fname" id="en_fname" value="{{ old('en_fname') }}" class="form-control m-input" placeholder="@lang('tr.Enter En_fname')">
                        <span class="m-form__help">Please Enter \ Name</span>
                    </div>

                    <div class="col-lg-4">
                        <label for="mobile">@lang('tr.Mobile'):</label>
                        <input type="text" name="mobile" id="mobile" value="{{ old('mobile') }}"  class="form-control m-input" placeholder="@lang('tr.Enter mobile')">
                        <span class="m-form__help">Please Enter phone number</span>
                    </div>

                    <div class="col-lg-4">
                        <label for="email">@lang('tr.Email'):</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"  class="form-control m-input" placeholder="@lang('tr.Enter your Email')">
                        <span class="m-form__help">Please Enter your Email</span>
                    </div>




                    <div class="col-lg-4">
                        <label for="course_id">@lang('tr.courses'):</label>
                        <select name="course_id" id="course_id" class="form-control" required>
                            <option value="">@lang('tr.Select courses')</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{$course->topic}}</option>
                            @endforeach
                        </select>

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