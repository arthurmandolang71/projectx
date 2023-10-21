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
                    <li class="breadcrumb-item active"><a href="/caleg">Caleg</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah Client Caleg</a></li>
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
                                <form action="/caleg" class="form-valide-with-icon needs-validation" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="card-header">
                                        <h4 class="card-title">Data Caleg</h4>
                                    </div>

                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">NIK/KTP</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="bi bi-card-heading"></i> </span>
                                            <input name="ktp" value="{{ old('ktp') }}" type="text"
                                                class="form-control @error('ktp') is-invalid @enderror"
                                                id="validationCustomUsername"
                                                placeholder="Masukan Nomor Kartu Tanda Anggota (ktp)">
                                            @error('ktp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Nama Lengkap</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="bi bi-card-heading"></i> </span>
                                            <input name="nama" value="{{ old('nama') }}" type="text"
                                                class="form-control @error('nama') is-invalid @enderror"
                                                id="validationCustomUsername"
                                                placeholder="Masukan Nomor Kartu Tanda Anggota (nama)">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label" for="validationCustomUsername">Tempat
                                                Lahir</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-house-door-fill"></i>
                                                </span>
                                                <input name="tempat_lahir" value="{{ old('tempat_lahir') }}"
                                                    type="text"
                                                    class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                    id="validationCustomUsername" placeholder="Masukan tempat lahir">
                                                @error('tempat_lahir')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label class="text-label form-label" for="validationCustomUsername">Tanggal
                                                Lahir</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-calendar4-event"></i>
                                                </span>
                                                <input name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                                    type="text"
                                                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                    placeholder="Masukan tanggal lahir" id="mdate">
                                                @error('tanggal_lahir')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label class="text-label form-label" for="validationCustomUsername">Jenis
                                                Kelamin</label>
                                            <div class="input-group">
                                                <select name="jenis_kelamin"
                                                    class="default-select form-control wide mb-3 @error('jenis_kelamin') is-invalid @enderror">
                                                    <option value="">Pilih</option>
                                                    @foreach ($jenis_kelamin as $item)
                                                        @if (old('jenis_kelamin') == $item)
                                                            <option value="{{ $item }}" selected>
                                                                {{ $item }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $item }}">{{ $item }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('jenis_kelamin')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <hr>
                                    <div class="card-header">
                                        <h4 class="card-title">Pilih Dapil</h4>
                                    </div>
                                    <div class="row ">
                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label" for="validationCustomUsername">Partai Caleg</label>
                                            <div class="basic-form">
                                                <select name="partai_id"
                                                    class="single-select-placeholder js-states @error('partai_id') is-invalid @enderror">
                                                    <option value="">Pilih</option>
                                                    @foreach ($partai as $item)
                                                        @if (old('partai_id') == $item->id)
                                                            <option value="{{ $item->id }}" selected>
                                                                {{ $item->nama }} </option>
                                                        @else
                                                            <option value="{{ $item->id }}">{{ $item->nama }} 
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('partai_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label" for="validationCustomUsername">No. Urut</label>
                                            <div class="basic-form">
                                                <select name="no_urut"
                                                    class="single-select-placeholder js-states @error('no_urut') is-invalid @enderror">
                                                    <option value="">Pilih</option>
                                                    @for ($i = 1; $i <= 12; $i++)
                                                    @if(old('no_urut') == $i)
                                                        <option value="{{ $i }}" selected>{{ $i }}</option>
                                                    @else
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                    @endif
                                                @endfor
                                                </select>
                                                @error('no_urut')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="card-header">
                                            <h4 class="card-title">Pilih Salah Satu Dapil</h4>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label"
                                                for="validationCustomUsername">Dapil RI</label>
                                            <div class="basic-form">
                                                <select name="dapil_ri" id="dapil_ri"
                                                    class="default-select form-control wide mb-3 @error('dapil_ri') is-invalid @enderror">
                                                    <option value="">Pilih</option>
                                                    @foreach ($dapil_ri as $item)
                                                        @if (old('dapil_ri') == $item->id)
                                                            <option value="{{ $item->id }}" selected>
                                                                {{ $item->nama }} -  {{ $item->keterangan }}</option>
                                                        @else
                                                            <option value="{{ $item->id }}">{{ $item->nama }} - {{ $item->keterangan }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('dapil_ri')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label"
                                                for="validationCustomUsername">Dapil Provinsi</label>
                                            <div class="basic-form">
                                                <select name="dapil_prov" id="dapil_prov"
                                                    class="single-select-placeholder js-states @error('dapil_prov') is-invalid @enderror">
                                                    <option value="">Pilih</option>
                                                    @foreach ($dapil_prov as $item)
                                                        @if (old('dapil_prov') == $item->id)
                                                            <option value="{{ $item->id }}" selected>
                                                                {{ $item->nama }} - {{ $item->keterangan }}</option>
                                                        @else
                                                            <option value="{{ $item->id }}">{{ $item->nama }} - {{ $item->keterangan }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('dapil_prov')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <label class="text-label form-label" for="validationCustomUsername">Dapil Kabupaten/Kota</label>
                                            <div class="basic-form">
                                                <select name="dapil_kabkota" id="dapil_kabkota"
                                                    class="single-select-placeholder js-states @error('dapil_kabkota') is-invalid @enderror">
                                                    <option value="">Pilih</option>
                                                    @foreach ($dapil_kabkota as $item)
                                                        @if (old('dapil_kabkota') == $item->id)
                                                            <option value="{{ $item->id }}" selected>
                                                                {{ $item->nama }} - {{ $item->keterangan }}</option>
                                                        @else
                                                            <option value="{{ $item->id }}">{{ $item->nama }} - {{ $item->keterangan }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('dapil_kabkota')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card-header">
                                        <h4 class="card-title">Kontak Anggota</h4>
                                    </div>

                                    <div class="row ">
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label" for="validationCustomUsername">
                                                No. Wa</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-whatsapp"></i>
                                                </span>
                                                <input name="no_wa" value="{{ old('no_wa') }}" type="text"
                                                    class="form-control @error('no_wa') is-invalid @enderror"
                                                    id="validationCustomUsername" placeholder="Masukan No.Wa Aktif">
                                                @error('no_wa')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label" for="validationCustomUsername">Akun
                                                Username</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-instagram"></i>
                                                </span>
                                                <input name="username" value="{{ old('username') }}" type="text"
                                                    class="form-control @error('facebook') is-invalid @enderror"
                                                    id="validationCustomUsername" >
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label" for="validationCustomUsername">Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-film"></i>
                                                </span>
                                                <input name="password" value="{{ old('password') }}" type="text"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="validationCustomUsername" >
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label" for="validationCustomUsername">SubDomain</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-film"></i>
                                                </span>
                                                <input name="subdomain" value="{{ old('subdomain') }}" type="text"
                                                    class="form-control @error('subdomain') is-invalid @enderror"
                                                    id="validationCustomUsername" placeholder="contoh : nvb">
                                                @error('subdomain')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h4 class="card-title">Foto Anggota</h4>
                                    </div>

                                    <div class="row ">
                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label" for="validationCustomUsername">Foto
                                                Profil </label>
                                            <div class="input-group">
                                                <div class="form-file">
                                                    <input name="foto_profil" type="file"
                                                        class="form-file-input form-control @error('foto_profil') is-invalid @enderror"
                                                        id="image1" onchange="priviewImage1()">
                                                </div>
                                                <span class="input-group-text">Upload</span>
                                                @error('foto_profil')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <div>
                                                    <img class="img-preview1 img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label" for="validationCustomUsername">Foto
                                                Bannner</label>
                                            <div class="input-group">
                                                <div class="form-file">
                                                    <input name="banner_client" type="file"
                                                        class="form-file-input form-control @error('banner_client') is-invalid @enderror"
                                                        id="image2" onchange="priviewImage2()">
                                                </div>
                                                <span class="input-group-text">Upload</span>
                                                @error('banner_client')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div>
                                                <img class="img-preview2 img-fluid">
                                            </div>
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

        function priviewImage2() {
            const image = document.querySelector('#image2');
            const view = document.querySelector('.img-preview2');

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




