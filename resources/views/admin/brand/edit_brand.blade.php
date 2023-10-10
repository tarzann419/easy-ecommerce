@extends('admin.admin_master')
@section('admin')




<div class="container-full">
<!-- Content Header (Page header) -->

<!-- Main content -->
<section class="content">
    <div class="row">

        
        <div class="col-8">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Brand </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                
                                
            <form method="post" action="{{ route('brand.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <input type="hidden" name="id" value="{{ $brand->id }}">
                        <input type="hidden" name="old_image" value="{{ $brand->brand_image }}">

                        <div class="form-group">
                            <h5>Brand Name EN </h5>
                            <div class="controls">
                                <input type="text" name="brand_name_en" class="form-control" value="{{ $brand->brand_name_en }}">
                                @error('brand_name_en')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <h5>Brand Name FR </h5>
                            <div class="controls">
                                <input type="text" name="brand_name_fr" class="form-control" value="{{ $brand->brand_name_fr }}" >
                                @error('brand_name_fr')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group">
                            <h5>Brand Image </h5>
                            <div class="controls">
                                <input type="file" name="brand_image" class="form-control" >
                                @error('brand_image')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                    

                




                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">
                </div>
            </form>



                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

</div>





@endsection