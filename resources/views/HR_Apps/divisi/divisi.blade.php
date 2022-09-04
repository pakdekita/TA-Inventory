@extends('HR_Apps.layout.main')

@section('content')

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">
            
            <!-- Page Heading -->
            <div class="align-items-center mb-4">
                <h3 class="h3 mb-0 text-gray-800">Divisi Pegawai</h3>
                <h6 class="h6 mb-0 text-gray-800">Halaman yang menampilkan berbagai divisi/departemen yang ada.</h6>
            </div>

            <!-- DataTables Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary mt-2">Divisi/Departement</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Divisi</th>
                                    <th>Gaji Divisi</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <h6 class="mt-2">
                                                <a href="#">Human Resource</a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="mt-2">Rp 2500000</h6>
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning btn-sm shadow-sm" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                                                <span class="text">Edit</span>
                                            </button>

                                            <!-- Edit Modal-->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ingin mengedit divisi?</h5>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">Silahkan isi form berikut sesuai dengan format yang tersedia.
                                                            <hr>
                                                            <form action="">

                                                                <div class="mb-3 text-left container-fluid">
                                                                    <label for="division_name" class="form-label">Nama Divisi</label>
                                                                    <input type="text" class="form-control bg-light border-0 small">
                                                                </div>
                                                                <div class="mb-3 text-left container-fluid">
                                                                    <label for="division_email" class="form-label">Gaji</label>
                                                                    <input type="number" class="form-control bg-light border-0 small" placeholder="Format: 2500000">
                                                                </div>
                                                                <hr>
                                                                <button class="btn btn-danger" href="#">Delete</button>
                                                                <small class="form-text text-muted">Tekan delete jika ingin menghapus data divisi.</small>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary shadow-sm" href="#">Simpan</button>
                                                            <button class="btn btn-secondary shadow-sm" type="button" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

@endsection