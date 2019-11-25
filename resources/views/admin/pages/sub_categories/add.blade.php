@extends('admin.layouts.app')

@push('stylesheets')
<link href="{{ asset('/css/croppie.min.css') }}" rel="stylesheet" type="text/css">
<style>
    label {
        color: #333 !important;
        font-weight: 500;
    }
</style>
@endpush

@push('scripts')
<script src="{{ asset ('/coreui/plugins/validate/jquery.validate.js') }}" type="text/javascript"></script>
<script src="{{ asset ('/coreui/plugins/validate/validation.js') }}" type="text/javascript"></script>
<script src="{{ asset ('/js/croppie.min.js') }}" type="text/javascript"></script>
<script>
$().ready(function() {
    $uploadCrop = $('#').croppie({
        enableExif: true,
        viewport: {
            width: 200,
            height: 200,
            type: 'circle'
        },
        boundary: {
            width: 300,
            height: 300
        }
    });
});
</script>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form id="signupForm" method="POST" action="{{ $post_url }}" enctype="multipart/form-data" autocomplete="off" novalidate="novalidate">
            {{ csrf_field() }}                
            <div class="row">
                    <div class="col-md-5">
                        <div class="card border-primary">
                            <div class="card-header text-white bg-primary">
                                <div class="row">
                                    <div class="col-md-12"><strong>{{ $title }}</strong></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Name</label>
                                            <input class="form-control" name="name" maxlength="50" type="text" value="{{ @$data_value->name }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Category</label>
                                            <select class="form-control" name="category" required>
                                                <option value=""> Select Category </option>
                                                @foreach ($category as $row)
                                                    <option value="{{ $row->id }}" @if(@$data_value->category_id == $row->id) selected @endif>{{ $row->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Status</label>
                                            <select class="form-control" name="status" required>
                                                <option value="1" @if(@$data_value->status == 1) selected @endif>Active</option>
                                                <option value="0" @if(@$data_value->status == 0) selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>  
                <!-- /.col-->
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            <!-- /.row-->
            </form>
        </div>
    </div>
    <hr>
@endsection
