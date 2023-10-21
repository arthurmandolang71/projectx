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
                    <li class="breadcrumb-item active"><a href="/calegpaket">Caleg</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah Paket Caleg</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">

                        <!--********************************** content start ***********************************-->
                        <div class="row container">
                            <div class="col-12">
                                <a href="/calegpaket" class="btn btn-block btn-primary"><span
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
                                <form action="/calegpaket" class="form-valide-with-icon needs-validation" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header">
                                        <h4 class="card-title">Pilih Salah Satu antara dengan dapil provinsi atau dengan
                                            dapil RI</h4>
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="text-label form-label" for="validationCustomUsername">Tipe
                                            paket</label>
                                        <div class="basic-form">
                                            <select name="paket_tipe" id="paket_tipe"
                                                class="form-control @error('paket_tipe') is-invalid @enderror" required>
                                                <option value="">PIlih</option>
                                                <option value="1">Paket atara caleg Kabkota dan Provinsi</option>
                                                <option value="2">Paket atara caleg Kabkota dan RI</option>
                                            </select>
                                            @error('paket_tipe')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="text-label form-label" for="validationCustomUsername">Dapil
                                            Kabupaten/Kota</label>
                                        <div class="basic-form">
                                            <select name="caleg_kabkota" id="dapil_kabkota"
                                                class="single-select-placeholder js-states @error('dapil_kabkota') is-invalid @enderror"
                                                required>
                                                <option value="">Pilih</option>
                                                @foreach ($caleg_kabkota as $item)
                                                    @if (old('dapil_kabkota') == $item->id)
                                                        <option value="{{ $item->id }}" selected>
                                                            {{ $item->nama }} - {{ $item->keterangan }}</option>
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->nama }} -
                                                            {{ $item->keterangan }}
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

                                    <div class="mb-3 col-md-12">
                                        <label class="text-label form-label" for="validationCustomUsername">Dapil
                                            Provinsi</label>
                                        <div class="basic-form">
                                            <select name="caleg_prov" id="dapil_prov"
                                                class="single-select-placeholder js-states @error('dapil_prov') is-invalid @enderror">
                                                <option value="">Pilih</option>
                                                @foreach ($caleg_prov as $item)
                                                    @if (old('dapil_prov') == $item->id)
                                                        <option value="{{ $item->id }}" selected>
                                                            {{ $item->nama }} - {{ $item->keterangan }}</option>
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->nama }} -
                                                            {{ $item->keterangan }}
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
                                        <label class="text-label form-label" for="validationCustomUsername">Dapil
                                            RI</label>
                                        <div class="basic-form">
                                            <select name="caleg_ri" id="dapil_ri"
                                                class="single-select-placeholder js-states  @error('dapil_ri') is-invalid @enderror">
                                                <option value="">Pilih</option>
                                                @foreach ($caleg_ri as $item)
                                                    @if (old('dapil_ri') == $item->id)
                                                        <option value="{{ $item->id }}" selected>
                                                            {{ $item->nama }} - {{ $item->keterangan }}</option>
                                                    @else
                                                        <option value="{{ $item->id }}">{{ $item->nama }} -
                                                            {{ $item->keterangan }}
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


                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="text-label form-label" for="validationCustomUsername">Apakah
                                    paket caleg
                                    akan
                                    di aktifkan ?</label>
                                <div class="form-check form-switch">
                                    <input name="is_active" value="1" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked" @if (old('active')) checked @endif>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">centang jika
                                        Paket Caleg
                                        ini akan di aktifkan</label>
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                        required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        Anda yakin data yang di input sudah benar ?
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn me-2 btn-primary">Simpan</button>
                            <a href="/calegpaket" class="btn btn-light">Batal</a>
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
@endSection
