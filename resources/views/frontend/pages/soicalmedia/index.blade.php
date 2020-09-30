@extends('backend.layouts.master')
@section('title',__('tr.soicalmedia'))

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
                            @lang('tr.soicalmedia')
                        </h3>
                    </div>
                </div>
{{--                <div class="m-portlet__head-tools">--}}
{{--                    <a href="{{ route('comments') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">--}}
{{--													<span>--}}
{{--														<i class="la la-arrow-left"></i>--}}
{{--														<span>@lang('tr.back to list')</span>--}}
{{--													</span>--}}
{{--                    </a>--}}


{{--                </div>--}}
            </div>
        </div>

        <!--begin::Form-->
        @include('backend.components.errors')
        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('soicalmedia_update') }}" method="post" enctype="multipart/form-data" id="selectform">
            @csrf
            <div class="m-portlet__body">

                <div class="form-group m-form__group row">

                    <div class="col-lg-6">
                        <label for="facebook">facebook:</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="facebook" id="facebook" class="form-control m-input" value="@if(isset($soicalmedia->facebook)) {{ $soicalmedia->facebook }} @endif">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="twitter">twitter:</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text" name="twitter" id="twitter" class="form-control m-input"  value="@if(isset($SoicalMedia->twitter)){{ $SoicalMedia->twitter}} @endif">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <label for="instagram">instagram:</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text" name="instagram" id="instagram" class="form-control m-input" value="@if(isset($SoicalMedia->instagram)) {{ $SoicalMedia->instagram }} @endif">
                        </div>
                    </div>




                    <div class="col-lg-6">
                        <label for="youtube">youtube:</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text" name="youtube" id="youtube" class="form-control m-input" value="@if(isset($SoicalMedia_data->youtube)) {{ $SoicalMedia_data->youtube }} @endif">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <label for="gmail">gmail:</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text" name="gmail" id="gmail" class="form-control m-input" value="@if(isset($SoicalMedia_data->gmail)) {{ $SoicalMedia_data->gmail }} @endif">
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

