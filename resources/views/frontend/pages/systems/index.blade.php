@extends('backend.layouts.master')
@section('title',__('tr.system'))

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
                            @lang('tr.system')
                        </h3>
                    </div>
                </div>

            </div>
        </div>

        <!--begin::Form-->
        @include('backend.components.errors')

        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('systems_update') }}" method="post" enctype="multipart/form-data" id="selectform">
            @csrf
            <div class="m-portlet__body">

                <div class="form-group m-form__group row">



                    <div class="col-lg-6">
                        @if(isset($system_data->en_title))
                            <img src="{{ asset('frontend/website_images/systems/'.$system_data->image) }}" class="img-responsive img-thumbnail" style="display: block;margin-left: auto;margin-right: auto;width: 300px;" alt="">
                        @endif
                    </div>

                    <div class="col-lg-6">
                        <label class="col-lg-4 file">@lang('tr.Select  Image')</label>
                        <div class="col-md-8">
                            <input type="file" id="file"  name="image" aria-label="File browser example"  onchange="readURL(this);" />
                        </div>



                    </div>

                    <div class="col-lg-6">
                        <label for="en_title">@lang('tr.en_title'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="en_title" id="en_title" class="form-control m-input" value="@if(isset($system_data->en_title)) {{ $system_data->en_title }} @endif">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_title">@lang('tr.ar_title'):</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text"   name="ar_title" id="ar_title" class="form-control m-input" value="@if(isset($system_data->ar_title)){{ $system_data->ar_title}} @endif">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <label for="en_descriptions">@lang('tr.en_descriptions'):</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text" name="en_descriptions" id="en_descriptions" class="form-control m-input" value="@if(isset($system_data->en_descriptions)) {{ $system_data->en_descriptions }} @endif">
                        </div>
                    </div>




                    <div class="col-lg-6">
                        <label for="ar_descriptions">@lang('tr.ar_descriptions'):</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text" name="ar_descriptions" id="ar_descriptions" class="form-control m-input" value="@if(isset($system_data->ar_descriptions)) {{ $system_data->ar_descriptions }} @endif">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <label for="en_footer">@lang('tr.en_footer'):</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text" name="en_footer" id="en_footer" class="form-control m-input" value="@if(isset($system_data->en_footer)) {{ $system_data->en_footer }} @endif">
                        </div>
                    </div>




                    <div class="col-lg-6">
                        <label for="ar_footer">@lang('tr.ar_footer'):</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text" name="ar_footer" id="ar_footer" class="form-control m-input" value="@if(isset($system_data->ar_footer)) {{ $system_data->ar_footer }} @endif">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <label for="en_address">@lang('tr.en_address'):</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text" name="en_address" id="en_address" class="form-control m-input" value="@if(isset($system_data->en_address)) {{ $system_data->en_address }} @endif">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <label for="ar_address">@lang('tr.ar_address'):</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text" name="ar_address" id="ar_address" class="form-control m-input" value="@if(isset($system_data->ar_address)) {{ $system_data->ar_address }} @endif">
                        </div>
                    </div>




                    <div class="col-lg-6">
                        <label for="en_phone_number">@lang('tr.en_phone_number'):</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text" name="ar_footer" id="ar_footer" class="form-control m-input" value="@if(isset($system_data->en_phone_number)) {{ $system_data->en_phone_number }} @endif">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <label for="ar_phone_number">@lang('tr.ar_phone_number'):</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text" name="ar_phone_number" id="ar_phone_number" class="form-control m-input" value="@if(isset($system_data->ar_phone_number)) {{ $system_data->ar_phone_number }} @endif">
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

