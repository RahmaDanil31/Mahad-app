<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | DataTables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

    <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('component.profile-admin')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Pendaftaran</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Pandaftaran</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-11">
                                            <h3 class="card-title">DataTable with default features</h3>
                                        </div>
                                        <a href="{{ url('/admin/form-pendaftaran') }}" class="btn btn-success btn-default">
                                            Tambah
                                        </a>
                                    </div>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Nim</th>
                                                <th>Telepon</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $index => $user)
                                            <tr>
                                                <td style="width: 2%;">
                                                    {{ $index + 1 }}
                                                </td>
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <td>
                                                    {{ $user->nim }}
                                                </td>
                                                <td>
                                                    {{ $user->telepon }}
                                                </td>
                                                <td>
                                                    {{ $user->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}
                                                </td>
                                                <td>
                                                    <span style="color: {{ $user->status ? 'green' : 'red' }}">
                                                        {{ $user->status ? 'Active' : 'Inactive' }}
                                                    </span>
                                                </td>
                                                <td style="width: 22%;">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-petugas-edit{{ $user->id }}">
                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Edit
                                                            </button>
                                                        </div>
                                                        <div class="col-4">
                                                            <form action="{{ route('daftar.destroy', $user->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" {{ (Auth::user()->id == $user->id || $user->status) ? 'disabled':''}} class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus fakultas ini?')">
                                                                    <i class="fas fa-trash">
                                                                    </i>
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="col-4">
                                                            <form action="{{ route('petugas.status', $user->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" {{ (Auth::user()->id == $user->id) ? 'disabled':''}} class="btn btn-warning btn-sm">
                                                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                                                    {{ $user->status ? 'Inactive' : 'Active' }}
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- modal edit -->
                                            <div class="modal fade" id="modal-petugas-edit{{ $user->id }}">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Form Petugas</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('petugas.update', $user->id) }}" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-9">
                                                                            <div class="form-group">
                                                                                <label for="name">Nama</label>
                                                                                <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" placeholder="Masukan Nama Petugas">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label>Jenis Kelamin</label>
                                                                                <select name="jenis_kelamin" class="form-control select2" style="width: 100%;">
                                                                                    @if ($user->jenis_kelamin == 'L')
                                                                                    <option selected="selected" value="L">Laki-laki</option>
                                                                                    @else
                                                                                    <option selected="selected" value="P">Perempuan</option>
                                                                                    @endif
                                                                                    <option value="{{ $user->jenis_kelamin == 'L' ? 'P':'L'}}">{{ $user->jenis_kelamin=='L' ? 'Perempuan' : 'Laki-laki' }}</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group">
                                                                                <label for="telepon">Telepon</label>
                                                                                <input type="text" class="form-control" id="telepon" value="{{ $user->telepon }}" name="telepon" placeholder="Masukan Telepon">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="form-group">
                                                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                                                <input type="text" class="form-control" value="{{ $user->tempat_lahir }}" id="tempat_lahir" name="tempat_lahir">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                                                <input type="date" class="form-control" id="tanggal_lahir" value="{{ $user->tanggal_lahir ? \Carbon\Carbon::parse($user->tanggal_lahir)->format('Y-m-d') : '' }}" name="tanggal_lahir">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.card-body -->
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>


                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->


    @include('component.script')

</body>

</html>