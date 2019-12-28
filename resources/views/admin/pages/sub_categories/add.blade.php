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
<script src="{{ asset ('/js/croppie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('/js/ckeditor.js') }}" type="text/javascript"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    var i = 1;
    function addRow() {
        this.i = this.i + 1;
        $("#iteniaryTable").append('<tr id="'+this.i+'"><td><input name="day[]"  type="number" class="form-control" value="" placeholder="Day" /></td><td><input name="day_detail[]"  type="text" class="form-control" value="" placeholder="Details for the day" /></td><td><input type="button" class="btn btn-danger" value="-" onclick="removeRow('+this.i+')"></td></tr>');
    }
    function removeRow(id) {
        $('#'+id).remove();
    }

    var z = 1;
    function addImageRow() {
        this.z = this.z + 1;
        $("#images").append('<tr id="'+this.z+'"><td><input name="image[]"  type="file" class="form-control" value="" placeholder="1" /></td><td></td><td><input type="button" class="btn btn-danger" value="-" onclick="removeImageRow('+this.z+')"></td></tr>');
    }

    function removeImageRow(id) {
         $('#'+id).remove();
    }
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
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="ccnumber">Name</label>
                                            <input class="form-control" name="name" maxlength="50" type="text" value="{{ @$data_value->name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
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
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="ccnumber">Status</label>
                                            <select class="form-control" name="status" required>
                                                <option value="1" @if(@$data_value->status == 1) selected @endif>Active</option>
                                                <option value="0" @if(@$data_value->status == 0) selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Short Desicription</label>
                                             <input class="form-control" name="short_description" maxlength="200" type="text" value="{{ @$data_value->short_description }}" placeholder="Write short description within 200 words." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Overview</label>
                                            <textarea rows="10" name="overview" class="form-control" id="editor">
                                                {{ @$data_value->overview }}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Iteniary</label>
                                            <table id="iteniaryTable" width="100%"  class="table table-bordered table-striped">
                                              <tr>
                                                <th width="10%">Day</th>
                                                <th width="57%">Detail</th>
                                                <th width="1%"></th>
                                              </tr>
                                              <tr>
                                                <td><input name="day[]"  type="number" class="form-control" value="" placeholder="Day" /></td>
                                                <td><input name="day_detail[]"  type="text" class="form-control" value="" placeholder="Details for the day" /></td>
                                                <td><input type="button" class="btn btn-danger" value="-" onclick="removeRow('1')"></td>
                                              </tr>
                                            </table>
                                             <input type="button"  class="btn btn-primary" value="Add Day" onclick="addRow()"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Images</label>
                                            <table id="images" width="100%"  class="table table-bordered table-striped">
                                              <tr>
                                                <th width="10%">Select</th>
                                                <th width="57%">Image</th>
                                                <th width="1%"></th>
                                              </tr>
                                              <tr>
                                                <td><input name="image[]"  type="file" class="form-control" value="" placeholder="1" /></td>
                                                <td></td>
                                                <td><input type="button" class="btn btn-danger" value="-" onclick="removeImageRow('1')"></td>
                                              </tr>
                                            </table>
                                             <input type="button"  class="btn btn-primary" value="Add Image" onclick="addImageRow()"/>
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
