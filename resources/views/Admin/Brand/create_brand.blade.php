@extends('adminlte::page')

@section('js')
    <script> $('#lfm').filemanager('image');</script>
    <script> $('#lfm2').filemanager('image');</script>


@stop

@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Create Brand</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="{{route('brand.store')}}">
                @csrf
                <!-- text input -->
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="integer" class="form-control" name="status" placeholder="Enter ...">
                </div>
                <div class="form-group">
                    <label>Cover Image</label>
                    <div class="input-group">
                       <span class="input-group-btn">
                         <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                           <i class="fa fa-picture-o"></i> Choose
                         </a>
                       </span>
                        <input id="thumbnail" class="form-control" type="text" name="cover_image">
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                </div>
                <div class="form-group">
                    <label>Pictures</label>
                    <div class="input-group">
                       <span class="input-group-btn">
                         <a id="lfm2" data-input="thumbnail2" data-preview="holder" class="btn btn-primary">
                           <i class="fa fa-picture-o"></i> Choose
                         </a>
                       </span>
                        <input id="thumbnail2" class="form-control" type="text" name="pictures">
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                </div>

                <button type="submit" class="btn btn-info pull-right">Submit</button>

            </form>
        </div>
        <!-- /.box-body -->
    </div>


@endsection
