@extends('backend.layouts.master')
@section('title',__('tr.Update student'))
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
                            @lang('tr.Update student')
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <a href="{{ route('students') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
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
        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('update_students',$student->id) }}" method="post" enctype="multipart/form-data" id="selectform">
            @csrf
            <div class="m-portlet__body">

                <div class="form-group m-form__group row">

                    <div class="col-lg-6">
                        <label>@lang('tr.Code'):</label>
                        <input type="text" name="code" id="code"  value="{{ $student->code }}" class="form-control m-input">

                    </div>

                    <div class="col-lg-6">
                        <label>@lang('tr.en_fname'):</label>
                        <input type="text" name="en_fname" id="en_fname" value="{{ $student->en_fname }}" class="form-control m-input" >

                    </div>

                    <div class="col-lg-6">
                        <label>@lang('tr.ar_fname'):</label>
                        <input type="text" name="ar_fname" id="ar_fname" value="{{ $student->ar_fname }}" class="form-control m-input" >

                    </div>
                    <div class="col-lg-6">
                        <label>@lang('tr.en_lname'):</label>
                        <input type="text" name="en_lname" id="en_lname"  value="{{ $student->en_lname }}" class="form-control m-input">

                    </div>

                    <div class="col-lg-6">
                        <label>@lang('tr.ar_lname'):</label>
                        <input type="text" name="ar_lname" id="ar_lname"  value="{{ $student->ar_lname }}" class="form-control m-input">

                    </div>

                    <div class="col-lg-6">
                        <label class="">@lang('tr.Email'):</label>
                        <input type="email" name="email" id="email" value="{{ $student->email }}"class="form-control m-input" >

                    </div>

                    <div class="col-lg-4">
                        <label>@lang('tr.en_address'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="en_address" id="en_address"  value="{{ $student->en_address }}" class="form-control m-input">
                            <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                        </div>

                    </div>




                    <div class="col-lg-4">
                        <label>@lang('tr.ar_address'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="ar_address" id="ar_address"  value="{{ $student->ar_address }}" class="form-control m-input">
                            <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                        </div>

                    </div>



                    <div class="col-lg-4">
                        <label>@lang('tr.Mobile'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="mobile" id="mobile" value="{{ $student->mobile }}" class="form-control m-input">

                        </div>

                    </div>



                    <div class="col-lg-4">
                        <label>@lang('tr.phone'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="phone" id="phone" value="{{ $student->phone }}" class="form-control m-input">

                        </div>

                    </div>



                    <div class="col-lg-4">
                        <label>@lang('tr.status'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="status" id="status" value="{{ $student->status }}" class="form-control m-input">

                        </div>

                    </div>




                    <div class="col-lg-4">
                        <label>@lang('tr.dateofjoin'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="date" name="dateofjoin" id="status" value="{{ $student->dateofjoin }}" class="form-control m-input">

                        </div>

                    </div>



                    <div class="col-lg-4">
                        <label>@lang('tr.course_price'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="course_price" id="course_price" value="{{ $student->course_price }}" class="form-control m-input">

                        </div>

                    </div>




                    <div class="col-lg-4">
                        <label>@lang('tr.amount_paid'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="amount_paid" id="amount_paid" value="{{ $student->amount_paid }}" class="form-control m-input">

                        </div>

                    </div>




                    <div class="col-lg-4">
                        <label>@lang('tr.remaining_amount'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="remaining_amount"  id="remaining_amount" value="{{ $student->remaining_amount }}" class="form-control m-input">

                        </div>

                    </div>








                    <div class="col-lg-4">
                        <label class="">@lang('tr.Gender'):</label>
                        <div class="m-radio-inline">
                            <label class="m-radio m-radio--solid">
                                <input type="radio" name="gender"  value="male"{{$student->gender == 'male' ? 'checked' : ''}}>@lang('tr.Male')

                                <span></span>
                            </label>
                            <label class="m-radio m-radio--solid">
                                <input type="radio" name="gender"  value="female"{{$student->gender == 'female' ? 'checked' : ''}}>@lang('tr.Female')

                                <span></span>
                            </label>
                        </div>

                    </div>



                </div>




                <div class="col-lg-6">
                    <label for="course_id">@lang('tr.course')</label>
                    <select name="course_id" id="course_id" class="form-control" required>
                        <option value="">@lang('tr.Select another course')</option>
                        @foreach ($courses as $course)
                            @if($student->course_id == $course->id)
                                <option value="{{ $course->id }}" selected>{{ $course->topic }}</option>
                            @else
                                <option value="{{ $course->id }}">{{ $course->topic }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>






                <div class="col-lg-6">
                    <label class="col-lg-4 file">@lang('tr.Select another Image')</label>
                    <div class="col-md-8">
                        <input type="file" name="image" id="file" aria-label="File browser example"  onchange="readURL(this);"  />
                        <img src="{{ URL::to('/') }}/backend/dashboard_images/students/images/{{ $student->image }}" class="img-thumbnail" width="100" />

                        <img id="blah" src="#" alt="@lang('tr.your image')" />
                        <span class="file-custom"></span>
                    </div>



                </div>







                <div class="col-lg-6">
                    <label class="col-lg-4 file">@lang('tr.Select another image_profession_id')</label>
                    <div class="col-md-8">
                        <input type="file" name="image_profession_id" id="file" aria-label="File browser example"  onchange="readURL(this);"  />
                        <img src="{{ URL::to('/') }}/backend/dashboard_images/students/image_profession/{{ $student->image_profession_id }}" class="img-thumbnail" width="100" />

                        <img id="blah" src="#" alt="@lang('tr.your image_profession_id')" />
                        <span class="file-custom"></span>
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

    </Script>


