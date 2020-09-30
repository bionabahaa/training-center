@extends('backend.layouts.master')
@section('title',__('tr.Create New course'))

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
                            @lang('tr.Create New course')
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <a href="{{ route('courses') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
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
        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('store_courses') }}" method="post" enctype="multipart/form-data" id="selectform">
            @csrf
            <div class="m-portlet__body">
                <div class="form-group m-form__group row">

                    <div class="col-lg-6">
                        <label for="category_id">@lang('tr.Category')</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">@lang('tr.Select Category')</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-lg-6">
                        <label for="instructor_id">@lang('tr.instructors'):</label>
                        <select name="instructor_id" id="instructor_id" class="form-control" required>
                            <option value="">@lang('tr.Select instructors')</option>
                            @foreach ($instructors as $instructor)
                                <option value="{{ $instructor->id }}">{{$instructor->fname }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-lg-6">
                        <label for="en_topic">@lang('tr.en_topic'):</label>
                        <input type="text" name="en_topic" id="en_topic" class="form-control m-input" value="{{ old('en_topic') }}" placeholder="@lang('tr.Enter English topic')">
                        <span class="m-form__help">Please Enter English topic</span>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_topic">@lang('tr.ar_topic'):</label>
                        <input type="text" name="ar_topic" id="ar_topic" class="form-control m-input" placeholder="@lang('tr.Enter Arabic topic')">
                        <span class="m-form__help">Please Enter Arabic topic</span>
                    </div>


                    <div class="col-lg-6">
                        <label for="en_description">@lang('tr.en_description'):</label>
                        <textarea name="en_description" id="en_description" cols="30" rows="10" class="form-control m-input" placeholder="@lang('tr.tr.Enter English description')" required></textarea>

                        <span class="m-form__help">Please Enter English description</span>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_description">@lang('tr.ar_description'):</label>
                        <textarea name="ar_description" id="ar_description" cols="30" rows="10" class="form-control m-input" placeholder="@lang('tr.Enter Arabic description')" required></textarea>

                        <span class="m-form__help">Please Enter Arabic description</span>
                    </div>




                </div>
                <div class="form-group m-form__group row">

                    <div class="col-lg-4">
                        <label for="course_level">@lang('tr.course_level'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="course_level" id="course_level" class="form-control m-input" placeholder="@lang('tr.Enter your course_level')">
                        </div>
                        <span class="m-form__help">Please Enter your course_level</span>
                    </div>

                    <div class="col-lg-4">
                        <label>@lang('tr.price'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="price" id="price" class="form-control m-input" placeholder="@lang('tr.Enter your price')">
                        </div>
                        <span class="m-form__help">Please Enter your price</span>
                    </div>



                    <div class="col-lg-4">
                        <label for="location">@lang('tr.location'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="location" id="location" class="form-control m-input" placeholder="@lang('tr.Enter your location')">
                        </div>
                        <span class="m-form__help">Please Enter your price</span>
                    </div>


                <div class="form-group m-form__group row">
                    <div class="col-lg-4">
                        <label class="">@lang('tr.start_date'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="date" name="start_date" id="start_date" class="form-control m-input" placeholder="@lang('tr.Enter your start_date')">
                        </div>
                        <span class="m-form__help">Please Enter your Job</span>
                    </div>





                    <div class="col-lg-4">
                        <label class="">@lang('tr.end_date'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="date" name="end_date" id="end_date" class="form-control m-input" onchange="res()" placeholder="@lang('tr.Enter your end_date')">
                        </div>
                        <span class="m-form__help">Please Enter your end_date</span>
                    </div>






                    <div class="col-lg-4">
                        <label class="">@lang('tr.duration'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="duration" id="duration" readonly   class="form-control m-input"  placeholder="@lang('tr.Enter your duration')" >
                        </div>
                        <span class="m-form__help">Please Enter your duration</span>
                    </div>

                    <div class="col-lg-4">
                        <label for="course_hours">@lang('tr.course_hours'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="course_hours" id="course_hours" readonly class="form-control m-input" placeholder="@lang('tr.Enter your course_hours')">
                            @lang('hours')
                        </div>
                        <span class="m-form__help">Please Enter your course_hours</span>
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






    <script type="text/javascript">
        function res(){

            // alert(document.getElementById("start_date").value +" >> "+document.getElementById("end_date").value)


            var start_date = new Date(document.getElementById("start_date").value);

            var end_date = new Date(document.getElementById("end_date").value);

            var timeDiff = Math.abs(end_date.getTime() - start_date.getTime());
            var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
            var hours = (diffDays * 24);
            //alert(diffDays);

            // alert("Period =" + diffDays + " (Days from NTP)");
            $('#duration').val(diffDays);
            $('#course_hours').val(hours);

        }
    </script>