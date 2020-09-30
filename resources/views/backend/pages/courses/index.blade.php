@extends('backend.layouts.master')
@section('title',__('tr.courses'))
@section('stylesheet')
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')

    <div class="m-portlet m-portlet--mobile m-portlet--body-progress-">

        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        @lang('tr.All courses')
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="{{ route('create_courses') }}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>@lang('tr.Create New course')</span>
												</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>


        <div class="m-portlet__body">
            <table id="example"  class="table table-bordered table table-hover">
                <thead >
                <tr>
                    <th>@lang('tr.image')</th>
                    <th>@lang('tr.topic')</th>
                    <th>@lang('tr.description')</th>
                    <th>@lang('tr.start_date')</th>
                    <th>@lang('tr.category_name')</th>
                    <th>@lang('tr.instructor_name') </th>
                    <th>@lang('tr.Action')</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($courses as $index => $course)
                    <tr>
                    <td ><img src="{{ URL::to('/') }}/backend/dashboard_images/courses/{{$course->image }}" class="img-thumbnail" width="200" /></td>


                    <td >{{ $course->topic }}</td>
                    <td >{{ $course->description }}</td>
                    <td >{{ $course->start_date }}</td>
                    <td >{{ $course->Categories->en_name }}</td>
                    <td >{{ $course->instructor->en_fname }}</td>
                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="false">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-32px, -6px, 0px);">

                                <a class="dropdown-item" href="{{ route('edit_courses',$course->id) }}"><i class="la la-leaf"></i> @lang('tr.Edit')</a>
                                <a class="dropdown-item"  onclick="return confirm('Are You Sure ?')" href="{{ route('delete_courses',$course->id) }}"><i class="flaticon-delete"></i> @lang('tr.Delete')</a>
                            </div>
						</span>

                            <a  href="{{ route('show_courses',$course->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                                <i class="flaticon-visible"></i>
                            </a>

                        <!--
                        <a  href="{{ route('view_courses')}}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only" title="View">
                            @lang('tr.view page')
                                </a> -->

                        </td>

                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>@lang('tr.image')</th>
                    <th>@lang('tr.topic')</th>
                    <th>@lang('tr.description')</th>
                    <th>@lang('tr.start_date')</th>
                    <th>@lang('tr.category_name')</th>
                    <th>@lang('tr.instructor_name') </th>
                    <th>@lang('tr.Action')</th>

                </tr>
                </tfoot>
            </table>
        </div>



{{--    <!--Begin::Section-->--}}
{{--        <div class="row">--}}
{{--            @foreach ($courses as $index => $course)--}}
{{--                <div class="col-xl-4">--}}

{{--                    <!--begin:: Widgets/Blog-->--}}
{{--                    <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force">--}}
{{--                        <div class="m-portlet__head m-portlet__head--fit">--}}
{{--                            <div class="m-portlet__head-caption">--}}
{{--                                <div class="m-portlet__head-action">--}}
{{--                                    <button type="button" class="btn btn-sm m-btn--pill  btn-brand">{{ $course->Categories->en_name }}</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="m-portlet__body">--}}
{{--                            <div class="m-widget19">--}}
{{--                                <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height-: 286px">--}}
{{--                                    <img src="{{ URL::to('/') }}/backend/dashboard_images/courses/{{$course->image }}" alt="">--}}
{{--                                    <h3 class="m-widget19__title m--font-light">--}}
{{--                                        {{$course->topic }}--}}
{{--                                    </h3>--}}
{{--                                    <div class="m-widget19__shadow"></div>--}}
{{--                                </div>--}}
{{--                                <div class="m-widget19__content">--}}
{{--                                    <div class="m-widget19__header">--}}
{{--                                        <div class="m-widget19__user-img">--}}
{{--                                            <img class="m-widget19__img" src="{{ URL::to('/') }}/backend/dashboard_images/courses/{{$course->image }}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="m-widget19__info">--}}
{{--														<span class="m-widget19__username">--}}
{{--                                                            {{$course->instructor->en_fname }}</span>--}}

{{--                                            --}}{{--														</span><br>--}}

{{--                                            --}}{{--                                        <span class="m-widget19__time">--}}
{{--                                            --}}{{--															UX/UI Designer, Google--}}
{{--                                            --}}{{--														</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="m-widget19__stats">--}}
{{--														<span class="m-widget19__number m--font-brand">--}}
{{--															{{$course->price }}--}}
{{--														</span>--}}
{{--                                            <span class="m-widget19__comment">--}}
{{--															price--}}
{{--														</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="m-widget19__body">--}}
{{--                                        {{$course->description }}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                                            <div class="m-widget19__action">--}}
{{--                                    <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">view</button>--}}
{{--                                </div>--}}
{{--                                <div class="m-widget19__action">--}}
{{--                                    <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">edit</button>--}}
{{--                                </div>--}}

{{--                                <div class="m-widget19__action">--}}
{{--                                    <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">delete</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!--end:: Widgets/Blog-->--}}
{{--                </div>--}}

{{--            @endforeach--}}

{{--        </div>--}}

{{--        <!--End::Section-->--}}

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

