@extends('multiauth::layouts.app')
@section('main-content')
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">StartUp Application</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Application</li>
                        </ol>
                    </nav>
                </div>
                <!-- <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">List of User Startup Application</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="slno">Sl No.</th>
                                <th scope="col" class="sort" data-sort="user">User</th>
                                <th scope="col" class="sort" data-sort="name">Name</th>
                                <th scope="col" class="sort" data-sort="regno">Registration No.</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col">Created At</th>
                                <th scope="col" class="sort" data-sort="view">View</th>                                
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($user_data as $data)                           
                            <tr>
                                <td>
                                    {{$loop->index + 1}}
                                </td>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="{{asset($data->application->photo )}}">
                                        </a>
                                    </div>
                                </th>
                                <td>
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">{{$data->name}}</span>
                                    </div>
                                </td>
                                <td>
                                     {{$data->application->app_id}}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status">pending</span>
                                    </span>
                                </td>
                                <td>                                                                     
                                   {{ \Carbon\Carbon::parse($data->application->created_at)->format('d/m/Y H:i:s')}}                                 
                                </td>

                                <td>
                                    <button type="button" class="btn btn-outline-success btn-sm" onclick="myFunction()">View</button>                                                                        
                                </td>
                                 <!-- this script is for popup window  -->
                                <script>
                                    function myFunction() {
                                    var newWin = window.open('{{route('UserDetails')}}', 'user_Details', 'width=600,height=400');
                                    }
                                </script>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <!-- Card footer -->
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection