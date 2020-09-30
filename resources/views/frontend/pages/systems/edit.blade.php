@extends('backend.layouts.master')
@section('title',__('tr.Update section'))

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
                            @lang('tr.Update section')
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <a href="{{ route('comments') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
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
        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('update_comments',$comments_data->id) }}" method="post" enctype="multipart/form-data" id="selectform">
            @csrf
            <div class="m-portlet__body">

                <div class="form-group m-form__group row">

                    <div class="col-lg-6">
                        <label for="en_title">@lang('tr.en_title'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="en_title" id="en_title"  value="{{ $comments_data->en_title }}" class="form-control m-input">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_title">@lang('tr.ar_title'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="ar_title" id="ar_title"  value="{{ $comments_data->ar_title }}" class="form-control m-input">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label for="en_comments">@lang('tr.en_comments'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <textarea name="en_comments" id="en_comments" cols="30" rows="10" class="form-control m-input"  value="">{{ $comments_data->en_comments }}</textarea>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_comments">@lang('tr.ar_comments'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <textarea name="ar_comments" id="ar_comments" cols="30" rows="10" class="form-control m-input" value="">{{ $comments_data->ar_comments }}</textarea>

                        </div>
                    </div>






                    <div class="col-lg-6">
                        <label for="date">@lang('tr.date'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="date" name="date" id="date"  value="{{ $comments_data->date }}" class="form-control m-input">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <label for="time">@lang('tr.time'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="time" name="time" id="time"  value="{{ $comments_data->time }}" class="form-control m-input">
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
                                    <i class="fa fa-save"></i>&nbsp;@lang('tr.update')
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