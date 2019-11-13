@extends('backend.layouts.admin')
@section('title', 'About Us')

@section('content')
    <div class="about-us">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">About Us</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Manage About Us
                                <small>Simple and fast</small>
                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <div class="box-body">
                            @include('includes.error')
                            <div class="box-header with-border">
                                About Us
                            </div>
                            <div class="box-body">
                                <form action="{{route('abouts.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-header"></i></span>
                                        <input type="text" name="title" class="form-control" placeholder="Title......" value="{{old('title')?old('title'):''}}">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user-circle-o"></i> Profile Image</span>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <br>
                                    <label>Descriptions</label>
                                    <div class="form-group">
                                        <textarea name="description" id="" cols="30" rows="10" class="textarea form-control">{{old('description')?old('description'):''}}</textarea>
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-file-archive-o"></i> Upload CV</span>
                                        <input type="file" name="cv_file" class="form-control">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-file-image-o"></i> Background Image</span>
                                        <input type="file" name="bg_image" class="form-control">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-success btn-flat">Submit!</button>
                                        </span>
                                    </div>
                                    <br>
                                </form>
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