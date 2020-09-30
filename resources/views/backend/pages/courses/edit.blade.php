@extends('backend.layouts.master')
@section('title',__('tr.Update course'))
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
                            @lang('tr.Update section')
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <a href="{{ route('categories') }}" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
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
        <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('update_courses',$courses->id) }}" method="post" enctype="multipart/form-data" id="selectform">
            @csrf
            <div class="m-portlet__body">

                <div class="form-group m-form__group row">

                    <div class="col-lg-6">
                        <label for="en_topic">@lang('tr.en_topic'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="en_topic" id="en_topic"  value="{{ $courses->en_topic }}" class="form-control m-input">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_title">@lang('tr.ar_topic'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="ar_topic" id="ar_topic"  value="{{ $courses->ar_topic }}" class="form-control m-input">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <label for="en_description">@lang('tr.en_description'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <textarea name="en_description" id="en_description" cols="30" rows="10" class="form-control m-input"  value="">{{ $courses->en_description }}</textarea>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="ar_description">@lang('tr.ar_description'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <textarea name="ar_description" id="ar_description" cols="30" rows="10" class="form-control m-input" value="">{{ $courses->ar_description }}</textarea>

                        </div>
                    </div>



                    <div class="col-lg-6">
                        <label for="en_topic">@lang('tr.course_level'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="course_level" id="course_level"  value="{{ $courses->course_level }}" class="form-control m-input">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="course_hours">@lang('tr.course_hours'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="course_hours" id="course_hours"  value="{{ $courses->course_hours }}" class="form-control m-input">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <label for="start_date">@lang('tr.start_date'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="date" name="start_date" id="start_date"  value="{{ $courses->start_date }}" class="form-control m-input">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <label for="end_date">@lang('tr.end_date'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="date" name="end_date" id="end_date"  value="{{ $courses->end_date }}" class="form-control m-input">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <label for="duration">@lang('tr.duration'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="date" name="duration" id="duration"  value="{{ $courses->duration }}" class="form-control m-input">
                        </div>
                    </div>




                    <div class="col-lg-6">
                        <label for="price">@lang('tr.price'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="price" id="price"  value="{{ $courses->price }}" class="form-control m-input">
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <label for="location">@lang('tr.location'):</label>
                        <div class="m-input-icon m-input-icon--right">
                            <input type="text" name="location" id="location"  value="{{ $courses->location }}" class="form-control m-input">
                        </div>
                    </div>



                    <div class="col-lg-6">
                    <label for="category_id">@lang('tr.Category')</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        <option value="">@lang('tr.Select Category')</option>
                        @foreach ($categories as $category)
                            @if($courses->category_id == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    </div>











                    <div class="col-lg-6">
                        <label for="instructor_id">@lang('tr.Category')</label>
                        <select name="instructor_id" id="instructor_id" class="form-control" required>
                            <option value="">@lang('tr.Select Category')</option>
                            @foreach ($instructors as $instructor)
                                @if($courses->instructor_id == $instructor->id)
                                    <option value="{{ $instructor->id }}" selected>{{ $instructor->fname }}</option>
                                @else
                                    <option value="{{ $instructor->id }}">{{ $instructor->fname }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>






                    <div class="col-lg-6">
                        <label class="col-lg-4 file">@lang('tr.Select another Image')</label>
                        <div class="col-md-8">
                            <input type="file" name="image" id="file" aria-label="File browser example"  onchange="readURL(this);"  />
                            <img src="{{ URL::to('/') }}/backend/dashboard_images/courses/{{ $courses->image }}" class="img-thumbnail" width="100" />

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

