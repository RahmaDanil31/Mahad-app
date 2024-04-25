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
                            <h1>FORMULIR PENDAFTARAN MAHASANTRI</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-default">

                        <div class="card-header">
                            <div class="row">
                                <div class="col-11">
                                    <h3 class="card-title"></h3>
                                </div>
                                <a href="{{ url('/admin/pendaftaran') }}" class="btn btn-success btn-default">
                                    Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pendaftaran.update', $user->id) }}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="color: forestgreen">I. Identitas Diri</label>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="name">Nama Lengkap <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" id="name" value="{{$user->name}}" name="name" required placeholder="Masukan Nama Lengkap">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nim">Nim <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" id="nim" name="nim" value="{{$user->nim}}" required placeholder="Masukan Nim">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="email">Email <span style="color: red;">*</span></label>
                                                <input class="form-control" id="email" name="email" type="email" value="{{$user->email}}" required placeholder="Masukan Email">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
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
                                                <label for="tempat_lahir">Tempat Lahir <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" id="tempat_lahir" value="{{$user->tempat_lahir}}" required name="tempat_lahir">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tanggal_lahir">Tanggal Lahir <span style="color: red;">*</span></label>
                                                <input type="date" class="form-control" id="tanggal_lahir" value="{{ date('Y-m-d', strtotime($user->tanggal_lahir)) }}" required name="tanggal_lahir">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="slta">SLTA <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" value="{{$user->slta}}" required id="slta" name="slta">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="telepon">Telepon <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" value="{{$user->telepon}}" id="telepon" required name="telepon">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wa">WA <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" value="{{$user->wa}}" required id="wa" name="wa">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pendidikan_pesantren">Pendidikan Pesantren <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" id="pendidikan_pesantren" value="{{$user->pendidikan_pesantren}}" required name="pendidikan_pesantren">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gedung/No Kamar</label>
                                                <select class="form-control select2" name="kamar_id" style="width: 100%;">
                                                    @foreach ($kamars as $index => $kamar)
                                                    @if ($user->kamar_id == $kamar->id)
                                                    <option selected="selected" value="{{ $kamar->id }}"> {{ $kamar->gedung->nama }}, Kamar : {{ $kamar->nama }}</option>
                                                    @else
                                                    <option value="{{ $kamar->id }}">{{ $kamar->gedung->nama }}, Kamar : {{ $kamar->nama }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Foto (3 x 4) <span style="color: red;">*</span></label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" {{$user->path_foto == null ?'required':'' }} name="foto" id="foto">
                                                    <label class="custom-file-label" for="foto">Upload</label>
                                                </div>
                                                @php
                                                $foto = substr($user->path_foto, strpos($user->path_foto, 'foto/') + 5); // Menghapus 'surat/' dari path file
                                                @endphp
                                                <a href="{{ asset('/'.$user->path_foto) }}" download>{{ $foto }}</a>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="color: forestgreen">II. Identitas Orang Tua Wali</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nama_ayah">Nama Ayah <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" value="{{$user->nama_ayah}}" id="nama_ayah" required name="nama_ayah">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nama_ibu">Nama Ibu <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" value="{{$user->nama_ibu}}" id="nama_ibu" required name="nama_ibu">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="pekerjaan">Pekerjaan <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" id="pekerjaan" value="{{$user->pekerjaan_ortu}}" required name="pekerjaan_ortu">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="telepon_ortu">Telepon <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" id="telepon_ortu" value="{{$user->telepon_ortu}}" required name="telepon_ortu">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wa_ortu">WA <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" id="wa_ortu" value="{{$user->wa_ortu}}" required name="wa_ortu">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="alamat_ortu">Alamat <span style="color: red;">*</span></label>
                                                <textarea class="form-control" name="alamat_ortu" required id="alamat_ortu"> {{$user->alamat_ortu}}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="color: forestgreen">III. Identitas Akademik</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jurusan (Program Studi)</label>
                                                <select class="form-control select2" id="jurusan" name="jurusan_id" onchange="setFakultas(event);" style="width: 100%;">
                                                    @foreach ($jurusans as $index => $jurusan)
                                                    @if ($user->jurusan_id == $jurusan->id)
                                                    <option value="{{ $jurusan->id }}" fakultas="{{ $jurusan->fakultas->nama }}"> {{ $jurusan->nama }}</option>
                                                    @else
                                                    <option value="{{ $jurusan->id }}" fakultas="{{ $jurusan->fakultas->nama }}"> {{ $jurusan->nama }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Fakultas</label>
                                                <select class="form-control select2" disabled id="fakultas_id" style="width: 100%;">
                                                    <option> {{ $user->jurusan->fakultas->nama }}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jalur Masuk</label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input custom-control-input-danger" type="radio" value="1" id="customRadio1" name="jalur_masuk" {{$user->jalur_masuk =='1'?'checked':'' }}>
                                                    <label for="customRadio1" class="custom-control-label">SPAN-PTKIN</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input custom-control-input-danger" type="radio" value="2" id="customRadio2" name="jalur_masuk" {{$user->jalur_masuk =='2'?'checked':'' }}>
                                                    <label for="customRadio2" class="custom-control-label">SPMB-PTAIN</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input custom-control-input-danger" type="radio" value="3" id="customRadio3" name="jalur_masuk" {{$user->jalur_masuk =='3'?'checked':'' }}>
                                                    <label for="customRadio3" class="custom-control-label">SPMB-MANDIRI</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input custom-control-input-danger" type="radio" value="4" id="customRadio4" name="jalur_masuk" {{$user->jalur_masuk =='4'?'checked':'' }}>
                                                    <label for="customRadio4" class="custom-control-label">BEASISWA</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input custom-control-input-danger" type="radio" value="5" id="customRadio5" name="jalur_masuk" {{$user->jalur_masuk =='5'?'checked':'' }}>
                                                    <label for="customRadio5" class="custom-control-label">LAINNYA</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="color: forestgreen">VI. Riwayat Kesehatan</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="surat" id="surat">
                                                    <label class="custom-file-label" for="surat">Upload Surat Keterangan Dokter</label>
                                                </div>
                                                @php
                                                $namaSurat = substr($user->path_file, strpos($user->path_file, 'surat/') + 6); // Menghapus 'surat/' dari path file
                                                @endphp
                                                <a href="{{ asset('/'.$user->path_file) }}" download>{{ $namaSurat }}</a>

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

    <script>
        function setFakultas(e) {
            var selectedOption = e.target.options[e.target.selectedIndex];
            var fakultas = selectedOption.getAttribute('fakultas');

            if ($('#fakultas_id option').length === 0) {
                $('#fakultas_id').append($('<option>', {
                    value: fakultas,
                    text: fakultas
                }));
            } else {
                $('#fakultas_id option').remove();
                $('#fakultas_id').append($('<option>', {
                    value: fakultas,
                    text: fakultas
                }));
            }
        }
    </script>


    @include('component.script')

</body>

</html>