@extends('admin.layouts.app')

@push('stylesheets')
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
<script src="{{ asset ('/js/ckeditor.js') }}" type="text/javascript"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form id="signupForm" method="POST" action="{{ $post_url }}" enctype="multipart/form-data" autocomplete="off" novalidate="novalidate">
            {{ csrf_field() }}                
            <div class="row">
                    <div class="col-md-12">
                        <div class="card border-primary">
                            <div class="card-header text-white bg-primary">
                                <div class="row">
                                    <div class="col-md-12"><strong>{{ $title }}</strong></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- first row -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="ccnumber">Product Name</label>
                                                    <input class="form-control" name="name" maxlength="50" type="text" value="{{ @$data_value->name }}" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="ccnumber">Product Code</label>
                                                    <input class="form-control" name="code" maxlength="50" type="text" value="{{ @$data_value->product_code }}" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <label for="ccnumber">Status</label>
                                                <select class="form-control" name="status" required>
                                                    <option value="1" @if(@$data_value->status == 1) selected @endif>Active</option>
                                                    <option value="0" @if(@$data_value->status == 0) selected @endif>Inactive</option>
                                                    <option value="2" @if(@$data_value->status == 2) selected @endif>Out of Stock</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- second row -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Description</label>
                                            <textarea rows="10" name="description" class="form-control" id="editor">
                                                {{ @$data_value->description }}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- third row -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="ccnumber">Actual Price (Rs.)</label>
                                                    <input class="form-control" name="actual_price" type="number" value="{{ @$data_value->actual_price }}" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="ccnumber">Discouted Price (Rs.)</label>
                                                    <input class="form-control" name="discounted_price" type="number" value="{{ @$data_value->discounted_price }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                <!-- fourth row  -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="ccnumber">Product Image</label>
                                                    <input class="form-control" type="file" name="image" id="image">                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                </div>
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
