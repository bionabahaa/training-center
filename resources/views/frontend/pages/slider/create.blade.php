@extends('backend.layouts.master')
@section('title',__('tr.Create New section'))

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
                            @lang('tr.Create New section')
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <a href="{{ route('slider') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
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
        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('store_slider') }}" method="post" enctype="multipart/form-data" id="selectform">
            @csrf
            <div class="m-portlet__body">

                <div class="form-group m-form__group row">

                    <div class="col-lg-6">
                        <label for="en_title">@lang('tr.en_title'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="en_title" id="en_title" class="form-control m-input" placeholder="@lang('tr.Enter English title')">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_title">@lang('tr.ar_title'):</label>
                        <div class="m-input-icon m-input-icon--right">

                            <input type="text" name="ar_title" id="ar_title" class="form-control m-input" placeholder="@lang('tr.Enter Arabic title')">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label for="en_description">@lang('tr.en_description'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <textarea name="en_description" id="en_description" cols="30" rows="10" class="form-control m-input" placeholder="@lang('tr.Enter English Descriptions')" required></textarea>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_description">@lang('tr.ar_description'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <textarea name="ar_description" id="ar_description" cols="30" rows="10" class="form-control m-input" placeholder="@lang('tr.Enter Arabic Descriptions')" required></textarea>

                        </div>
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