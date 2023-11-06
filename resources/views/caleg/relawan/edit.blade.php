@extends('template.main')

@section('header')
    <!-- Material color picker -->
    <link href="{{ asset('') }}assets/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet">

    <!-- Pick date -->
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/pickadate/themes/default.date.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endSection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="/relawan">Relawan</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah Relawan</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">

                        <!--********************************** content start ***********************************-->
                        <div class="row container">
                            <div class="col-12">
                                <a href="/kta" class="btn btn-block btn-primary"><span
                                        class="btn-icon-start text-primary"><i class="bi bi-backspace-fill"></i>
                                    </span>Kembali</a>
                            </div>
                        </div>

                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="basic-form">
                                <form action="/relawan/{{ $relawan->id }}" class="form-valide-with-icon needs-validation"
                                    method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    <div class="mb-3 col-md-12">
                                        <label class="text-label form-label" for="validationCustomUsername">Tim
                                            Kemenangan</label>
                                        <div class="basic-form">
                                            <select name="tim_id" id="tim_id"
                                                class="single-select-placeholder js-states @error('tim_id') is-invalid @enderror">
                                                <option value="">Pilih</option>
                                                @foreach ($tim as $item)
                                                    @if (old('tim_id', $relawan->tim_id) == $item->id)
                                                        <option value="{{ $item->id }}" selected>
                                                            {{ $item->nama }}</option>
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->nama }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('tim_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Nama
                                            Lengkap</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="bi bi-card-heading"></i> </span>
                                            <input name="nama" value="{{ old('nama', $relawan->nama) }}" type="text"
                                                class="form-control @error('nama') is-invalid @enderror"
                                                id="validationCustomUsername" placeholder="Masukan Nama Lengkap relawan">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label" for="validationCustomUsername">
                                                No. Wa</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-whatsapp"></i>
                                                </span>
                                                <input name="no_wa" value="{{ old('no_wa', $relawan->no_wa) }}"
                                                    type="text" class="form-control @error('no_wa') is-invalid @enderror"
                                                    id="validationCustomUsername" placeholder="Masukan No.Wa Aktif">
                                                @error('no_wa')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="text-label form-label"
                                            for="validationCustomUsername">Keterangan</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="bi bi-card-heading"></i> </span>
                                            <input name="keterangan" value="{{ old('keterangan', $relawan->keterangan) }}"
                                                type="text"
                                                class="form-control @error('keterangan') is-invalid @enderror"
                                                id="validationCustomUsername"
                                                placeholder="Masukan keterangan mengenai relawan ini">
                                            @error('keterangan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label" for="validationCustomUsername">Akun
                                                Username</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-instagram"></i>
                                                </span>
                                                <input name="username"
                                                    value="{{ old('username', $relawan->user_ref->username) }}"
                                                    type="text"
                                                    class="form-control @error('facebook') is-invalid @enderror"
                                                    id="validationCustomUsername">
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label" for="validationCustomUsername">Akun
                                                Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-film"></i>
                                                </span>
                                                <input name="password" value="{{ old('password') }}" type="text"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="validationCustomUsername">
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row ">
                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label" for="validationCustomUsername">Foto
                                                Relawan </label>
                                            <div class="input-group">
                                                <div class="form-file">
                                                    <input name="foto_relawan" type="file"
                                                        class="form-file-input form-control @error('foto_relawan') is-invalid @enderror"
                                                        id="image1" onchange="priviewImage1()">
                                                </div>
                                                <span class="input-group-text">Upload</span>
                                                @error('foto_relawan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <div>
                                                    <img src="{{ $relawan->nama }}" class="img-preview1 img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="text-label form-label" for="validationCustomUsername">Apakah
                                            akan menonaktifkan relawan ini ?</label>
                                        <div class="form-check form-switch">
                                            <input name="is_active" value="1" class="form-check-input"
                                                type="checkbox" id="flexSwitchCheckChecked"
                                                @if (old('is_active', $relawan->is_active)) checked @endif>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">centang jika
                                                ingin mengnonaktifkan relawan ini</label>
                                        </div>
                                    </div>


                                    <div class="mb-3 col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="invalidCheck2" required>
                                            <label class="form-check-label" for="invalidCheck2">
                                                Anda yakin data yang di input sudah benar ?
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn me-2 btn-primary">Simpan</button>
                                    <a href="/nik" class="btn btn-light">Batal</a>
                                </form>
                            </div>

                        </div>
                        <!--********************************** content end ***********************************-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection


@section('footer')
    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="{{ asset('') }}assets/vendor/moment/moment.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- pickdate -->
    <script src="{{ asset('') }}assets/vendor/pickadate/picker.js"></script>
    <script src="{{ asset('') }}assets/vendor/pickadate/picker.date.js"></script>

    <!-- Material color picker -->
    <script
        src="{{ asset('') }}assets/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">
    </script>

    <script src="{{ asset('') }}assets/js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="{{ asset('') }}assets/js/plugins-init/pickadate-init.js"></script>



    <!--  vendors -->

    <script src="{{ asset('') }}assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="{{ asset('') }}assets/vendor/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('') }}assets/js/plugins-init/select2-init.js"></script>

    <script>
        function priviewImage1() {
            const image = document.querySelector('#image1');
            const view = document.querySelector('.img-preview1');

            view.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                view.src = oFREvent.target.result;
            }
        }
    </script>
@endSection

<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
    integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
