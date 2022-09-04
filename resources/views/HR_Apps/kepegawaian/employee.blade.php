@extends('HR_Apps.layout.main')

@section('content')

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="align-items-center mb-4">
                <h1 class="h3 mb-0 text-gray-800">Detail Karyawan</h1>
                <h6 class="h6 mb-0 text-gray-800">Berikut merupakan detail informasi pribadi karyawan yang tersedia.</h6>
            </div>

            <!-- Informasi Karyawan -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary mt-2">Informasi Karyawan</h6>
                        <a href="{{ route('employee.index') }}" class="btn btn-secondary mr-3 shadow-sm">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                            <span class="text">Kembali</span>
                        </a>
                </div>
                <div class="card-body row">
                    <div class="col text-center py-2 picture">
                        <img src="{{ asset('/employeeImage/'.$employee->employee_image) }}" alt="Profile pict" class="img-fluid rounded">
                    </div>

                    <div class="row container align-items-center">
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_name" class="col-md-3 col-form-label font-weight-bold">Nama</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="{{ $employee->employee_name }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_email" class="col-md-3 col-form-label font-weight-bold">Email</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="{{ $employee->employee_email }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_position" class="col-md-3 col-form-label font-weight-bold">Jabatan</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="{{ $employee->employee_position }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_status" class="col-md-3 col-form-label font-weight-bold">Status Karyawan</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="{{ $employee->employee_status }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_division" class="col-md-3 col-form-label font-weight-bold">Divisi</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="{{ $employee->employee_division }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_acceptanceDate" class="col-md-3 col-form-label font-weight-bold">Tanggal Diterima</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="{{ $employee->employee_acceptanceDate }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_phone" class="col-md-3 col-form-label font-weight-bold">No. Telp</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="{{ $employee->employee_phone }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_outDate" class="col-md-3 col-form-label font-weight-bold">Tanggal Keluar</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="{{ $employee->employee_outDate }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_gender" class="col-md-3 col-form-label font-weight-bold">Gender</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="{{ $employee->employee_gender }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_marriage" class="col-md-3 col-form-label font-weight-bold">Status Pernikahan</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="{{ $employee->employee_marriage }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_religion" class="col-md-3 col-form-label font-weight-bold">Agama</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="{{ $employee->employee_religion }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_child" class="col-md-3 col-form-label font-weight-bold">Anak</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="{{ $employee->employee_child }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_age" class="col-md-3 col-form-label font-weight-bold">Umur</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="{{ $employee->employee_age }} Tahun">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <label for="employee_hospitalChart" class="col-md-3 col-form-label font-weight-bold">Riwayat Penyakit</label>
                                <div class="col-md-9">
                                    <input type="text" disabled readonly class="form-control-plaintext" value="{{ $employee->employee_hospitalChart }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="row g-3">
                                <label for="employee_address" class="col-md-3 col-form-label font-weight-bold">Alamat</label>
                                <div class="col-md-9">
                                    <textarea disabled readonly class="form-control" style="height: 100px">{{ $employee->employee_address }}</textarea>
                                </div>
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