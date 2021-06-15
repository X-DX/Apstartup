@extends('user_dashboard/layouts/app')
@section('main-content')

<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Welcome USer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Feedback</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <form action="" name="" id="" enctype="" method="post" accept-charset="utf-8">
        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Feedback</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                        <i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="" name="" id="" enctype="" method="post" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label>
                                                Your Name
                                            </label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <label>
                                                Arup Roy
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label>Rating</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <!-- radio -->
                                            <div class="form-group clearfix">
                                                <div class="icheck-success d-inline">
                                                    <input type="radio" name="Rating" checked id="radioRating1">
                                                    <label for="radioRating1">
                                                        Very Good
                                                    </label>
                                                </div>
                                                <div class="icheck-success d-inline">
                                                    <input type="radio" name="Rating" id="radioRating2">
                                                    <label for="radioRating2">
                                                        Good
                                                    </label>
                                                </div>
                                                <div class="icheck-success d-inline">
                                                    <input type="radio" name="Rating" id="radioRating3">
                                                    <label for="radioRating3">
                                                        Average
                                                    </label>
                                                </div>
                                                <div class="icheck-success d-inline">
                                                    <input type="radio" name="Rating" id="radioRating4">
                                                    <label for="radioRating4">
                                                        Below Average
                                                    </label>
                                                </div>
                                                <div class="icheck-success d-inline">
                                                    <input type="radio" name="Rating" id="radioRating5">
                                                    <label for="radioRating5">
                                                        Poor
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-outline card-info">
                                                <div class="card-header">
                                                    <label>Feedback/Suggestion</label>
                                                    <!-- tools box -->
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                                            <i class="fas fa-minus"></i></button>
                                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                                            <i class="fas fa-times"></i></button>
                                                    </div>
                                                    <!-- /. tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body pad">
                                                    <div class="mb-3">
                                                        <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="button" class="btn btn-block btn-success"><i class="fa fa-shield-alt"></i>&nbsp;&nbsp;&nbsp;Save Details</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</div>
<!-- /.content-wrapper -->
@endsection