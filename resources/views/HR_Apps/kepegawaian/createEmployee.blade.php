@extends('HR_Apps.layout.main')

@section('content')

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="col mb-4">
                <h3 class="h3 mb-0 text-gray-800">Ingin Menambahkan Karyawan?</h3>
                <h6 class="h6 mb-0 text-gray-800">Silahkan tambah data karyawan baru pada form berikut dan isi sesuai dengan format data yang tersedia.</h6>
            </div>

            <form method="POST" action="{{ route('employee.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Tambah Data Karyawan -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-sm-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary mt-2">Tambah Data Karyawan</h6>
                        <div class="row float-right">
                            <div class="my-2"></div>
                            <button href="{{ route('employee.store') }}" class="btn btn-success mr-2 shadow-sm" type="submit">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Simpan</span>
                            </button>
                            <div class="my-2"></div>
                            <a href="{{ route('employee.index') }}" class="btn btn-danger mr-3 shadow-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-ban"></i>
                                </span>
                                <span class="text">Cancel</span>
                            </a>
                        </div>
                    </div>

                    <!-- Form Edit Data Employee -->
                    <div class="card-body row justify-content-center">
                        <div class="row g-3 container align-items-center">
                            <div class="col-md-6 mb-3">
                                <label for="employee_name" class="form-label font-weight-bold">Nama</label>
                                <input type="text" class="form-control bg-light border-0 small" name="employee_name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="employee_email" class="form-label font-weight-bold">Email</label>
                                <input type="email" class="form-control bg-light border-0 small" name="employee_email" placeholder="example@example.com">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="employee_position" class="form-label font-weight-bold">Jabatan</label>
                                <input type="text" class="form-control bg-light border-0 small" name="employee_position">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="employee_status" class="form-label font-weight-bold">Status Karyawan</label>
                                <select class="custom-select bg-light border-0 small" name="employee_status">
                                    <option selected>Pilih Status Karyawan</option>
                                    <option value="Karyawan Tetap">Karyawan Tetap</option>
                                    <option value="Magang">Magang</option>
                                    <option value="Resign">Resign</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="employee_division" class="form-label font-weight-bold">Divisi</label>
                                <select class="custom-select bg-light border-0 small" name="employee_division">
                                    <option>Pilih Status Karyawan</option>
                                    @foreach($division as $dvs)
                                        <option value="{{ $dvs->division_name }}" {{ ($dvs->division_name == $options) ? 'selected' : '' }}></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="employee_acceptanceDate" class="form-label font-weight-bold">Tanggal Diterima</label>
                                <input type="date" class="form-control bg-light border-0 small" name="employee_acceptanceDate">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="employee_phone" class="form-label font-weight-bold">No. telp</label>
                                <input type="number" class="form-control bg-light border-0 small" name="employee_phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="employee_outDate" class="form-label font-weight-bold">Tanggal Keluar</label>
                                <input type="date" class="form-control bg-light border-0 small" name="employee_outDate">
                                <small class="form-text text-muted">Kosongkan jika tidak ada.</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="employee_gender" class="form-label font-weight-bold">Jenis Kelamin</label>
                                <select class="custom-select bg-light border-0 small" name="employee_gender">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="employee_marriage" class="form-label font-weight-bold">Status Pernikahan</label>
                                <select class="custom-select bg-light border-0 small" name="employee_marriage">
                                    <option selected>Pilih Status Pernikahan</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="employee_religion" class="form-label font-weight-bold">Agama</label>
                                <input type="text" class="form-control bg-light border-0 small" name="employee_religion">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="employee_child" class="form-label font-weight-bold">Anak</label>
                                <input type="number" class="form-control bg-light border-0 small" name="employee_child" placeholder="Jika tidak ada isi 0">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="employee_age" class="form-label font-weight-bold">Umur</label>
                                <input type="text" class="form-control bg-light border-0 small" name="employee_age">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="employee_hospitalChart" class="form-label font-weight-bold">Riwayat Penyakit</label>
                                <input type="text" class="form-control bg-light border-0 small" name="employee_hospitalChart">
                                <small class="form-text text-muted">Jika tidak ada isi "Tidak Ada".</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="employee_image" class="form-label font-weight-bold mr-2">Tambahkan Gambar</label>
                                <input type="file" class="btn btn-primary btn-sm shadow-sm" name="employee_image">
                                <small class="form-text text-muted">Tipe file .png, .jgp, .jpeg</small>
                            </div>
                            <div class="col mb-3">
                                <label for="employee_address" class="form-label font-weight-bold">Alamat</label>
                                <textarea class="form-control bg-light border-0 small" name="employee_address" rows="3"></textarea>
                            </div>
                        </div>
                    
                    </div>
                </div>

            </form>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

@endsection