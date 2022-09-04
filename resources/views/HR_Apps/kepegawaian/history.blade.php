@extends('HR_Apps.layout.main')

@section('content')

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">
            
            <!-- Page Heading -->
            <div class="align-items-center mb-4">
                <h6 class="h3 mb-0 text-gray-800">History Pegawai</h6>
                <h6 class="h6 mb-0 text-gray-800">Berikut merupakan data karyawan yang telah keluar/resign.</h6>
            </div>

            <!-- DataTables Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary mt-2">Daftar Karyawan</h6>
                    <a href="#" class="btn btn-primary mr-2 shadow-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text edit-sp">Tambah Data</span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Karyawan</th>
                                    <th>Kontak</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                {{-- @foreach ($employee as $empl) --}}
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <div class="row profile">
                                                <img class="col-md-6" src="#"></img>
                                                <div class="col-md-6 text-left font">
                                                    <h5 class="font-weight-bold">Jeno Lee</h5>
                                                    <p>Finance</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col g-3 mt-3">
                                                <h6 class="font-weight-bold">jenolee@email.com</h6>
                                                <p>0123456789</p>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="badge badge-warning mt-4" href="#">Edit</a>
                                            <a class="badge badge-success mt-4" href="#">Details</a>
                                        </td>
                                    </tr>
                                {{-- @endforeach --}}
            
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