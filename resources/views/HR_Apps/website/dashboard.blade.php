@extends('HR_Apps.layout.main')

@section('content')

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Welcome, User!</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Jumlah Pegawai Card -->
                <div class="col mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Jumlah Pegawai</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pegawai Masuk Card -->
                <div class="col mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Pegawai Masuk</div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">45</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jumlah Divisi Card -->
                <div class="col mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Jumlah Divisi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-list-alt fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Content Column -->
                <div class="col-lg-6 mb-3">

                    <!-- Employee Category -->
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kategori Karyawan</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-pie pt-4">
                                <canvas id="myPieChart"></canvas>
                            </div>
                            <hr>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> Direct
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> Social
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> Referral
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 mb-3">

                    <!-- Company's Event -->
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Company's Event</h6>
                        </div>
                        <div class="card-body">

                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Company's visit</td>
                                        <td> 
                                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Meeting rutin</td>
                                        <td> 
                                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <form method="POST" action="#" enctype="multipart/form-data">
                                            @csrf
                                            <td> 
                                                <input type="text" class="form-control bg-light border-0 small" placeholder="New Activity.."
                                                        aria-label="Search" aria-describedby="basic-addon2">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-circle btn-sm">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </td>
                                        </form>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Birthday Reminder -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Birthday Reminder</h6>
                </div>
                <div class="card-body row">
                    <div class="col-sm-2 text-center py-3 picture">
                        <img src="{{ asset('template/img/undraw_profile_2.svg') }}" alt="Profile pict" class="img-fluid">
                    </div>

                    <div class="col birthday"> 
                        <h3 class="font-weight-bold mb-2">Happy Birthday to You!!</h3>
                        <hr>
                        <h5>Employee Name</h5>
                        <p>Division</p>
                        <h5>DD-MM-YYYY</h5>
                    </div>
                
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

@endsection