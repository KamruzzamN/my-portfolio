@extends('backend.layouts.admin')
@section('title', 'Client Testimonial')

@section('content')
    <div class="testimonial-area">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Client Testimonial Section</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Manage Client Testimonial Section
                                <small>Simple and Fast</small>
                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <div class="box-body">
                            <div class="box-header with-border">
                                Client Testimonial Section
                            </div>
                            <div class="box-body">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-header"></i> Client Name</span>
                                    <input type="text" class="form-control" placeholder="Client Name......">
                                </div>
                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-header"></i> Position</span>
                                    <input type="text" class="form-control" placeholder="Position......">
                                </div>
                                <br>

                                <label>Descriptions</label>
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="10" class="textarea form-control"></textarea>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-star"></i> Rating Point</span>
                                    <input type="range" class="form-control form-range-field" min="1" max="5" value="2" step="1">
                                </div>
                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-file-image-o"></i> Image</span>
                                    <input type="file" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-success btn-flat">Submit!</button>
                                    </span>
                                </div>
                                <br>
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