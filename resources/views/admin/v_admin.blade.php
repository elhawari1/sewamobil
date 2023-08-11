    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sewa | Mobil</title>

        @include('asset_admin.v_css')

    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Navbar -->
            @include('layout_admin.v_navbar')
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            @include('layout_admin.v_sidebar')


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2" style="align-items: flex-end">
                            <div class="col">
                                <h1 class="m-0">Kantor</h1>
                                <ol class="breadcrumb float-sm">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active">Mobil</li>
                                </ol>
                            </div><!-- /.col -->
                            <div class="col ml-auto">
                                <button class="btn btn-outline-success" style="float: right" data-bs-toggle="modal"
                                    data-bs-target="#modalInsert"><i class="fa-sharp fa-solid fa-plus"></i></button>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Mobil</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Merek</th>
                                            <th>Model</th>
                                            <th>No Plat</th>
                                            <th>Tarif</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mobil as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->merek }}</td>
                                                <td>{{ $data->model }}</td>
                                                <td>{{ $data->no_plat }}</td>
                                                <td>Rp.{{ $data->tarif }} /day</td>
                                                <td>
                                                    @if ($data->status == 0)
                                                        <span class="badge text-bg-success">Belum Terpakai</span>
                                                    @elseif ($data->is_checked_in == 1)
                                                        <span class="badge text-bg-danger">Terpakai</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Insert Modal -->
            <div class="modal fade" id="modalInsert" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="padding-left: 35%">Tambah Mobil
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/mobil/insert" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Merek</label>
                                    <input type="text" name="merek" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Model</label>
                                    <input type="text" name="model" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">no_plat</label>
                                    <input type="text" name="no_plat" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">tarif</label>
                                    <input type="text" name="tarif" class="form-control" id="recipient-name">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-outline-primary">Simpan</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            @include('layout_admin.v_footer')
        </div>
        <!-- ./wrapper -->

        @include('asset_admin.v_js')
    </body>

    </html>
