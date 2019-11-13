@extends('backend.layouts.admin')
@section('title', 'Our Portfolio')

@section('content')
    <div class="portfolio-area">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Our Portfolio</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Our Portfolio Option
                                <small>Simple and fast</small>
                            </h3>
                        </div>
                        <div class="box-body">
                            <div class="box-header with-border">
                                Add Our Portfolio Item
                            </div>
                            <div class="box-body">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-header"></i> Name</span>
                                    <input type="text" class="form-control" placeholder="Project Name...">
                                </div>
                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i> Client Name</span>
                                    <input type="text" class="form-control" placeholder="Client Name...">
                                </div>
                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-tag"></i> Tag Name</span>
                                    <input type="text" class="form-control" placeholder="Tag Name...">
                                </div>
                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-table"></i> Type</span>
                                    <input type="text" class="form-control" placeholder="Type...">
                                </div>
                                <br>

                                <label>Descriptions</label>
                                <div class="form-group">
                                    <textarea name="" rows="10" class="textarea form-control"></textarea>
                                </div>
                                <br>


                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-star"></i> Rating Point</span>
                                    <input type="range" class="form-control form-range-field" min="1" max="5" value="2" step="1">
                                </div>
                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-image"></i> Preview Image</span>
                                    <input type="file" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-success btn-flat">Submit !</button>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection