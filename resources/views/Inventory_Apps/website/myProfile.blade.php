@extends('HR_Apps.layout.main')

@section('content')

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="align-items-center mb-4">
                <h3 class="h3 mb-0 text-gray-800">My Profile</h3>
            </div>

            <!-- Informasi Karyawan -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary mt-2">Informasi Karyawan</h6>
                    <a href="{{ url('/editProfile') }}" class="btn btn-warning mr-2 shadow-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-pencil-alt"></i>
                        </span>
                        <span class="text edit-sp">Edit</span>
                    </a>
                </div>
                <div class="card-body row">
                    <div class="col text-center py-2 picture">
                        <img src="{{ asset('template/img/undraw_profile_3.svg') }}" alt="Profile pict" class="img-fluid">
                    </div>

                    <div class="row container align-items-center">
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_name" class="col-md-3 col-form-label font-weight-bold">Nama</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="Nadya Zahra">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_email" class="col-md-3 col-form-label font-weight-bold">Email</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="nadyazahra@email.com">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_level" class="col-md-3 col-form-label font-weight-bold">Jabatan</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="Staff Human Resource">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_phone" class="col-md-3 col-form-label font-weight-bold">No. Telp</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="0123456789">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="gender" class="col-md-3 col-form-label font-weight-bold">Gender</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="Perempuan">
                                </div>
                            </div>
                        </div>

                    </div>
                
                </div>
            </div>

            <!-- Informasi Perusahaan -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi Perusahaan</h6>
                </div>
                <div class="card-body row">
                    <div class="col text-center py-2 picture">
                        <img src="{{ asset('template/img/undraw_rocket.svg') }}" alt="Profile pict" class="img-fluid">
                    </div>

                    <div class="container align-items-center">
                        <div class="row g-3 mb-3 ml-2">
                            <label for="company_name" class="col-sm-2 col-form-label font-weight-bold">Nama Perusahaan</label>
                            <div class="col-sm-10">
                                <input type="text" disabled readonly class="form-control-plaintext" value="Djarco Indonesia">
                            </div>
                        </div>
                        <div class="row g-3 mb-3 ml-2">
                            <label for="company_email" class="col-sm-2 col-form-label font-weight-bold">Email</label>
                            <div class="col-sm-10">
                                <input type="text" disabled readonly class="form-control-plaintext" value="djarcoindonesia@email.com">
                            </div>
                        </div>
                        <div class="row g-3 mb-3 ml-2">
                            <label for="company_phone" class="col-sm-2 col-form-label font-weight-bold">No. Telp</label>
                            <div class="col-sm-10">
                                <input type="text" disabled readonly class="form-control-plaintext" value="0123456789">
                            </div>
                        </div>
                        <div class="row g-3 ml-2">
                            <label for="company_address" class="col-sm-2 col-form-label font-weight-bold">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" readonly disabled class="form-control-plaintext" value="Perum. Sawangan Regensi blok G/14, Sawangan, Depok, Jawa Barat, 16519">
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

@endsection