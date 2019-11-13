@extends('backend.layouts.admin')
@section('title', 'Header Option')

@section('content')

    <div class="headder-area">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Header Options</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Home Page Header Content
                                <small>Simple and fast</small>
                            </h3>
                        </div>
                        <div class="box-body">

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-header"></i></span>
                                <input type="text" class="form-control" placeholder="Title...">
                            </div>
                            <br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-header"></i></span>
                                <input type="text" class="form-control" placeholder="Subtitle">
                            </div>
                            <br>

                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                <input type="text" class="form-control" placeholder="Facebook Link">
                            </div>
                            <br>

                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-skype"></i></span>
                                <input type="text" class="form-control" placeholder="Skype Link">
                            </div>
                            <br>

                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                                <input type="text" class="form-control" placeholder="Instagram Link">
                            </div>
                            <br>

                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-github"></i></span>
                                <input type="text" class="form-control" placeholder="GitHub Link">
                            </div>
                            <br>

                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="fa fa-edge"></i></span>
                                <input type="text" class="form-control" placeholder="Portfolio Link">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-success btn-flat">Submit!</button>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.col-->
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection