@extends('backend.layouts.master')
@section('title',__('tr.Book The Course'))
@section('stylesheet')
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')

    @include('backend.components.sucess')

    <div class="m-portlet m-portlet--mobile m-portlet--body-progress-">

        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        @lang('tr.Book The Course')
                    </h3>
                </div>
            </div>

            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="{{ route('create_students') }}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>@lang('tr.Create New student')</span>
												</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>


        <!--Begin::Section-->
        <div class="row">
            @foreach ($general_data as $index => $data)
            <div class="col-xl-4">

                <!--begin:: Widgets/Blog-->
                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force">
                    <div class="m-portlet__head m-portlet__head--fit">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-action">
                                <button type="button" class="btn btn-sm m-btn--pill  btn-brand">{{ $data->course->Categories->en_name }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="m-widget19">
                            <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height-: 286px">
                                <img src="{{ URL::to('/') }}/backend/dashboard_images/courses/{{$data->course->image }}" alt="">
                                <h3 class="m-widget19__title m--font-light">
                                    {{$data->topic }}
                                </h3>
                                <div class="m-widget19__shadow"></div>
                            </div>
                            <div class="m-widget19__content">
                                <div class="m-widget19__header">
                                    <div class="m-widget19__user-img">
                                        <img class="m-widget19__img" src="{{ URL::to('/') }}/backend/dashboard_images/instructors/{{$data->course->instructor->image }}" alt="">
                                    </div>
                                    <div class="m-widget19__info">
														<span class="m-widget19__username">
                                                            {{$data->course->instructor->en_fname }}</span>

{{--														</span><br>

{{--                                        <span class="m-widget19__time">--}}
{{--															UX/UI Designer, Google--}}
{{--														</span>--}}
                                    </div>
                                    <div class="m-widget19__stats">
														<span class="m-widget19__number m--font-brand">
															{{$data->course->price }}
														</span>
                                        <span class="m-widget19__comment">
															price
														</span>
                                    </div>
                                </div>
                                <div class="m-widget19__body">
                                    {{$data->course->en_description }}
                                </div>
                            </div>
{{--                            <div class="m-widget19__action">--}}
{{--                                <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">Book The Course</button>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/Blog-->
            </div>

                @endforeach

        </div>

        <!--End::Section-->




    </div>



@endsection



@section('javascript')
    <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );

    </script>

@endsection











