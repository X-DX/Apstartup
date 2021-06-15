@extends('user_dashboard/layouts/app')
@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Welcome {{ Auth::user()->name }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Details</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                            <!-- Timelime example  -->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- The time line -->
                                    <div class="timeline">
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                            <span class="bg-red">Important Points</span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                        <i class="fas fa-pen-fancy bg-pink"></i>
                                            <div class="timeline-item">
                                                <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                                                <!-- <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3> -->

                                                <div class="timeline-body">
                                                Startup recognition from state Govt. is mandatory before applying for State Govt. incentives.
                                                </div>
                                                <div class="timeline-footer">
                                                    <!-- <a class="btn btn-primary btn-sm">Read more</a>
                                                    <a class="btn btn-danger btn-sm">Delete</a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <div>
                                        <i class="fas fa-pen-fancy bg-green"></i>
                                            <div class="timeline-item">
                                                <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                                                <!-- <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3> -->
                                                <div class="timeline-body">
                                                Every form have two submit options "Save as Draft"(For future editing) and "Submit to Nodal Department"(For final submission).
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <div>
                                        <i class="fas fa-pen-fancy bg-yellow"></i>
                                            <div class="timeline-item">
                                                <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                                                <!-- <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3> -->
                                                <div class="timeline-body">
                                                Recognition and Incentive forms have same procedures 
                                                </div>
                                                <div class="timeline-footer">
                                                    <!-- <a class="btn btn-warning btn-sm">View comment</a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="fas fa-pen-fancy bg-blue"></i>
                                            <div class="timeline-item">
                                                <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                                                <!-- <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3> -->

                                                <div class="timeline-body">
                                                For Recognition and Incentives forms please go to "Applications" Menu.
                                                </div>
                                                <div class="timeline-footer">
                                                    <!-- <a class="btn btn-primary btn-sm">Read more</a>
                                                    <a class="btn btn-danger btn-sm">Delete</a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                            <span class="bg-green">Tutorials</span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-video bg-maroon"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="fas fa-clock"></i> 5 days ago</span>

                                                <!-- <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3> -->

                                                <div class="timeline-body">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe width="1350" height="494" src="https://www.youtube.com/embed/HdghNESbPOk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-sm bg-maroon">See comments</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <div>
                                            <i class="fas fa-clock bg-gray"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <!-- Footer -->
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->
@endsection