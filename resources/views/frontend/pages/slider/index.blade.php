@extends('backend.layouts.master')
@section('title',__('tr.Slider'))
@section('stylesheet')
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')

    <div class="m-portlet m-portlet--mobile m-portlet--body-progress-">

        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        @lang('tr.Slider')
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="{{ route('create_slider') }}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>@lang('tr.Add New ')</span>
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
                    <th>@lang('tr.en_title')</th>
                    <th>@lang('tr.ar_title')</th>
                    <th>@lang('tr.en_description')</th>
                    <th>@lang('tr.ar_description') </th>
                    <th>@lang('tr.Action')</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($slider_data as $index => $slider_data)
                    <td ><img src="{{ URL::to('/') }}/frontend/website_images/slider/{{ $slider_data->image }}" class="img-thumbnail" width="200" /></td>
                    <td >{{ $slider_data->en_title }}</td>
                    <td >{{ $slider_data->ar_title }}</td>
                    <td >{{ $slider_data->en_description }}</td>
                    <td >{{ $slider_data->ar_description }}</td>

                    <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="false">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-32px, -6px, 0px);">

                                <a class="dropdown-item" href="{{ route('edit_slider',$slider_data->id) }}"><i class="la la-leaf"></i> @lang('tr.Edit')</a>
                                <a class="dropdown-item"  onclick="return confirm('Are You Sure ?')" href="{{ route('delete_slider',$slider_data->id) }}"><i class="flaticon-delete"></i> @lang('tr.Delete')</a>
                            </div>
						</span>

                        <a  href="{{ route('show_slider',$slider_data->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                            <i class="flaticon-visible"></i>
                        </a>


{{--                        <a  href="{{ route('view_slider')}}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only" title="View">--}}
{{--                            @lang('tr.view page')--}}
{{--                        </a>--}}

                    </td>

                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>@lang('tr.image')</th>
                    <th>@lang('tr.en_title')</th>
                    <th>@lang('tr.ar_title')</th>
                    <th>@lang('tr.en_description')</th>
                    <th>@lang('tr.ar_description') </th>
                    <th>@lang('tr.Action')</th>

                </tr>
                </tfoot>
            </table>
        </div>
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