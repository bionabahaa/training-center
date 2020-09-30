@extends('backend.layouts.master')
@section('title',__('tr.subscribers'))
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
                        @lang('tr.All subscribers')
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="{{ route('create_subscribers') }}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>@lang('tr.Create New subscriber')</span>
												</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>


        <div class="m-portlet__body">
            <div class="m-portlet__body">
                <table id="example"  class="table table-bordered table table-hover">
                    <thead >
                    <tr>
                        <th>@lang('tr.en_fname')</th>
                        <th>@lang('tr.Mobile')</th>
                        <th>@lang('tr.Email')</th>
                        <th>@lang('tr.Course_Name')</th>



                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($subscribers as $index => $subscriber)
                        <td >{{ $subscriber->fname }}</td>
                        <td >{{ $subscriber->mobile }}</td>
                        <td >{{ $subscriber->email }}</td>
                        <td >{{ $subscriber->course->en_topic }}</td>


                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>@lang('tr.en_fname')</th>
                        <th>@lang('tr.Mobile')</th>
                        <th>@lang('tr.Email')</th>
                        <th>@lang('tr.Course_Name')</th>

                    </tr>
                    </tfoot>
                </table>
            </div>
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