@extends('backend.layouts.master')
@section('title',__('tr.Create New Subject'))

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
                            @lang('tr.Create New Subject')
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <a href="{{ route('subjects') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
													<span>
														<i class="la la-arrow-left"></i>
														<span>@lang('tr.back to list')</span>
													</span>
                    </a>


                </div>
            </div>
        </div>

        <!--begin::Form-->
        @include('backend.components.errors')
        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('store_subjects') }}" method="post" enctype="multipart/form-data" id="selectform">
            @csrf
            <div class="m-portlet__body">
                <div class="form-group m-form__group row">

                    <div class="col-lg-4">
                        <label for="course_id">@lang('tr.courses'):</label>
                        <select name="course_id" id="course_id" class="form-control" required>
                            <option value="">@lang('tr.Select courses')</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{$course->topic}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="col-lg-6">
                        <label for="en_name">@lang('tr.en_name'):</label>
                        <input type="text" name="en_name" id="en_name" class="form-control m-input" value="{{ old('en_name') }}" placeholder="@lang('tr.Enter English name')">
                        <span class="m-form__help">Please Enter English name</span>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_name">@lang('tr.ar_name'):</label>
                        <input type="text" name="ar_name" id="ar_name" class="form-control m-input"  value="{{ old('ar_name') }}" placeholder="@lang('tr.Enter Arabic name')">
                        <span class="m-form__help">Please Enter Arabic name</span>
                    </div>


                    <div class="col-lg-6">
                        <label for="en_description">@lang('tr.en_description'):</label>
                        <textarea name="en_description" id="en_description" cols="30" rows="10" class="form-control m-input" placeholder="@lang('tr.tr.Enter English description')" required>{{ old('en_description') }}</textarea>

                        <span class="m-form__help">Please Enter English description</span>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_description">@lang('tr.ar_description'):</label>
                        <textarea name="ar_description" id="ar_description" cols="30" rows="10" class="form-control m-input" placeholder="@lang('tr.Enter Arabic description')" required>{{ old('ar_description') }}</textarea>

                        <span class="m-form__help">Please Enter Arabic description</span>
                    </div>




                </div>
                <div class="form-group m-form__group row">

                    <div class="col-lg-4">
                        <label for="location">@lang('tr.location'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="location" id="location" value="{{ old('location') }}" class="form-control m-input" placeholder="@lang('tr.Enter your location')">
                        </div>
                        <span class="m-form__help">Please Enter your location</span>




                </div>




                </div>

                <div class="form-group m-form__group row">


                    <div class="col-lg-4">
                        <label for="date">@lang('tr.date'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="date" name="date" id="date" value="{{ old('date') }}" class="form-control m-input" placeholder="@lang('tr.Enter your date')">
                        </div>
                        <span class="m-form__help">Please Enter your date</span>
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








