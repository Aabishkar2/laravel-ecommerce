@extends('admin.layouts.app')

@push('stylesheets')
    <link href="{{ asset('/coreui/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/coreui/plugins/toast-master/css/jquery.toast.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
    <script src="{{ asset ('/coreui/plugins/toast-master/js/jquery.toast.js') }}"></script>
    <script src="{{ asset ('/coreui/plugins/toast-master/js/toastr.js') }}"></script>
    <script src="{{ asset ('/coreui/plugins/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset ('/coreui/plugins/sweetalert/jquery.sweet-alert.custom.js') }}"></script>
    <script src="{{ asset ('/js/select2.min.js') }}"></script>
    @if(Session::has('dtadd'))
        <script>
            jQuery(function(){
                $.toast({
                    heading: 'Success !!',
                    text: 'Data has been added successfully',
                    position: 'top-right',
                    loaderBg:'#ff6849',
                    icon: 'success',
                    hideAfter: 3500,
                    stack: 6
                });
            });
        </script>
    @endif
    @if(Session::has('dtedit'))
        <script>
            jQuery(function(){
                $.toast({
                    heading: 'Success !!',
                    text: 'Data has been updated successfully',
                    position: 'top-right',
                    loaderBg:'#ff6849',
                    icon: 'success',
                    hideAfter: 3500,
                    stack: 6
                });
            });
        </script>
    @endif
@endpush

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div style="display:none;">
                        @if(Session::has('dtadd'))
                        <div class="alert alert-success" style="padding:15px; margin-bottom:15px;">
                            <i class="fa fa-warning"></i> {{ Session('dtadd') }}
                        </div>
                        @endif
                        @if(Session::has('dtedit'))
                        <div class="alert alert-info" style="padding:15px; margin-bottom:15px;">
                            <i class="fa fa-warning"></i> {{ Session('dtedit') }}
                        </div>
                        @endif
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{route('admin.category.add', [0])}}" data-toggle="modal" data-id="0" data-backdrop="static" class="btn btn-pill btn-success"><i class="fa fa-plus"></i>&nbsp;Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(count($data) > 0)
                            <table class="table table-responsive-sm table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                        <tr id="tr{{ $row->id }}">
                                            <td>
                                                <div><strong>{{$row->name}}</strong></div>
                                            </td>
                                            <td>
                                                    @if($row->status == 0)
                                                    <div style="color:red;"><strong>Inactive</strong></div>
                                                    @else
                                                    <div style="color:green;"><strong>Active</strong></div>
                                                    @endif
                                            </td>
                                            <td>
                                                <span class="cursor"> <a href="{{ route('admin.category.add', [$row->id]) }}" title="Edit"  class="btn btn-info btn-circle btn-sm m-r-5"><i class="fa fa-edit"></i></a> </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                                <div class="alert alert-info">No Data found.</div>
                            @endif
                        </div>
                    </div>
                </div>
            <!-- /.col-->
            </div>
            <!-- /.row-->
        </div>
    </div>
@endsection