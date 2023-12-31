@extends('admin.admin_master')
@section('admin')

<div class="container-full">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">
                        <div class="icon bg-primary-light rounded w-60 h-60">
                            <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">New Customers</p>
                            <h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">
                        <div class="icon bg-warning-light rounded w-60 h-60">
                            <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Sold Cars</p>
                            <h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">
                        <div class="icon bg-success-light rounded w-60 h-60">
                            <i class="text-success mr-0 font-size-24 mdi mdi-phone-outgoing"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Outbound Call</p>
                            <h3 class="text-white mb-0 font-weight-500">1,700 <small class="text-success"><i class="fa fa-caret-up"></i> +0.5%</small></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">
                        <div class="icon bg-light rounded w-60 h-60">
                            <i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Total Revune</p>
                            <h3 class="text-white mb-0 font-weight-500">$4,500k <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">
                            Earning Summary
                        </h4>
                    </div>
                    <div class="box-body py-0">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="box no-shadow mb-0">
                                    <div class="box-body px-0">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div>
                                                <div id="chart41"></div>
                                            </div>
                                            <div>
                                                <h5>Top Order</h5>
                                                <h4 class="text-white my-0 font-weight-500">$39k</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="box no-shadow mb-0">
                                    <div class="box-body px-0">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div>
                                                <div id="chart42"></div>
                                            </div>
                                            <div>
                                                <h5>Average Order</h5>
                                                <h4 class="text-white my-0 font-weight-500">$24k</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="charts_widget_43_chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12">
                <div class="box bg-info bg-img" style="background-image: url(../images/gallery/bg-1.png)">
                    <div class="box-body text-center">
                        <img src="../images/trophy.png" class="mt-50" alt="" />
                        <div class="max-w-500 mx-auto">
                            <h2 class="text-white mb-20 font-weight-500">Best Employee Johen,</h2>
                            <p class="text-white-50 mb-10 font-size-20">You've got 50.5% more sales today. You've reached 8th milestone, checkout author section</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="box overflow-hidden">
                            <div class="box-body pb-0">
                                <div>
                                    <h2 class="text-white mb-0 font-weight-500">18.8k</h2>
                                    <p class="text-mute mb-0 font-size-20">Total users</p>
                                </div>
                            </div>
                            <div class="box-body p-0">
                                <div id="revenue1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="box overflow-hidden">
                            <div class="box-body pb-0">
                                <div>
                                    <h2 class="text-white mb-0 font-weight-500">35.8k</h2>
                                    <p class="text-mute mb-0 font-size-20">Average reach per post</p>
                                </div>
                            </div>
                            <div class="box-body p-0">
                                <div id="revenue2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            
        </div>
    </section>
    <!-- /.content -->
</div>


@endsection