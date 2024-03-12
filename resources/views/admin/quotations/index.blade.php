@extends('admin.layouts.main-layout')
@section('title','All Quotes')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <!--begin::Card-->
            @include('alerts.index')
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            All Quotes
                            <div class="text-muted pt-2 font-size-sm">Manage All Quotes</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-head-custom" style="width:100%">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="selectall"></th>
                                <th>Quote ID</th>
                                <th>Time Ago</th>                            
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <form method="POST" action="{{ url('admin/quotation/deleteall') }}">
                            @csrf
                            <button class="btn btn-danger deletebutton" style="display: none;"type="submit">Delete All</button>
                        <tbody>
                            @foreach($data as $r)
                                <tr>
                                    <td><input value="{{$r->quote_id}}" name="delete[]" type="checkbox"></td>
                                    <td>{{ $r->quote_id }}</td>
                                   <td>{{ Cmf::create_time_ago($r->created_at) }}</td>
                                   <td>{{ Cmf::date_format($r->created_at) }}</td>
                                   <td>
                                       <a target="_blank" class="btn btn-primary btn-sm" href="{{ url('getquote') }}/{{ $r->quote_id }}"><i class="fa fa-eye"></i> View Quote</a>
                                       <a onClick="return confirm('Are you sure you want to delete ?');" class="btn btn-danger btn-sm" href="{{ url('admin/quotation/deletequotations') }}/{{ $r->quote_id }}"><i class="fa fa-trash"></i> Delete Quote</a>
                                   </td>
                                </tr>

                            @endforeach
                        </tbody>
                        </form>
                    </table>
                    <div style="margin-top:10px;" class="row">
                        {!! $data->links('frontend.pagination') !!}
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection
@section('script')
<script type="text/javascript">
    $('.selectall').click(function() {
        if ($(this).is(':checked')) {
            $('input').attr('checked', true);
            $('.deletebutton').show();
        } else {
            $('input').attr('checked', false);
            $('.deletebutton').hide();
        }
    });
</script>
@endsection