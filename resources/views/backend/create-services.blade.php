@extends('backend.layouts.admin')
@section('title', 'Our Services')
@section('content')
    <div class="services-area">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Our Services</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Our Services Option
                                <small>Simple and fast</small>
                            </h3>
                        </div>
                        <div class="box-body">
                            <div class="box-header with-border">
                                Add Our Services Item
                            </div>
                            <div class="box-body">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-header"></i> Title</span>
                                    <input type="text" class="form-control" placeholder="Title...">
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-id-card-o"></i> Image Icon</span>
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-font"></i> Fontawesome Icon</span>
                                            <input type="text" class="form-control" placeholder="Icon Class">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <textarea class="textarea form-control" placeholder="Short Description"></textarea>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-tree"></i> Background Color</span>
                                    <input type="text" class="form-control my-colorpicker colorpicker-element" placeholder="Background Color...">
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
