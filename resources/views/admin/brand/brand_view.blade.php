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
                    <h3 class="box-title">Brand List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending"  style="width: 150.922px;">Brand Name English</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"  style="width: 240.648px;">Brand Name French</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 108.961px;">Brand Image</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"  style="width: 47.9844px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($brands as $item)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $item->brand_name_en }}</td>
                                                <td>{{ $item->brand_name_fr }}</td>
                                                <td><img src="{{ asset($item->brand_image) }}" style="width: 70px; height: 40px;" alt=""></td>
                                                <td>
                                                    <a href="{{ route('edit.brand',$item->id) }}" class="btn btn-info">Edit</a>
                                                    <a href="{{ route('brand.delete', $item->id) }}" class="btn btn-danger" id="delete">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <div class="col-4">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Brand </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                
                                
            <form method="post" action="{{ route('brand.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">

                        <div class="form-group">
                            <h5>Brand Name EN <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="brand_name_en" class="form-control">
                                @error('brand_name_en')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <h5>Brand Name FR <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="brand_name_fr" class="form-control" >
                                @error('brand_name_fr')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group">
                            <h5>Brand Image <span class="text-danger">*</span></h5>
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