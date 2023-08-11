<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Persewaan Mobil </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container-lg" style="margin-top: 50px;">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h3 class="text-center text-danger"><b>Data Mobil</b></h3>
                <div class="form-group pt-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Merek</th>
                                <th>Model</th>
                                <th>No Plat</th>
                                <th>Tarif</th>
                                <th>Status</th>
                                <th>Sewa</th>
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
                                        @elseif ($data->status == 1)
                                            <span class="badge text-bg-danger">Terpakai</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->status == 0)
                                            <button class="btn btn-outline-primary" style="float: right"
                                                data-bs-toggle="modal" data-bs-target="#modalInsert">Sewa</button>
                                        @elseif ($data->status == 1)
                                            <span class="badge text-bg-danger">Tidak Bisa</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Sewa Modal -->
    <div class="modal fade" id="modalInsert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="padding-left: 35%">Sewa Mobil
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/sewa/mobil" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Tanggal Pinjam</label>
                            <input type="date" name="tanggal_mulai" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Tanggal Berakhir</label>
                            <input type="date" name="tanngal_berakhir" class="form-control" id="recipient-name">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
