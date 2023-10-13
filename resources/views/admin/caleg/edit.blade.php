@extends('dpw.template.main')

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
                    <li class="breadcrumb-item active"><a href="/kta">KTA</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Edit KTA</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">

                        <!--********************************** content start ***********************************-->
                        <div class="row container">
                            <div class="col">
                                <a href="/kta" class="btn btn-block btn-primary"><span
                                        class="btn-icon-start text-primary"><i class="bi bi-backspace-fill"></i>
                                    </span>Kembali</a>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="basic-form">
                                <form action="/kta/{{ $kta->id }}" class="form-valide-with-icon needs-validation"
                                    method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    <div class="card-header">
                                        <h4 class="card-title"> Edit Biodata Anggota</h4>
                                    </div>

                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Nomor Kartu
                                            Tanda Anggota</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="bi bi-card-heading"></i> </span>
                                            <input name="kta" value="{{ old('kta', $kta->kta) }}" type="text"
                                                class="form-control @error('ktp') is-invalid @enderror"
                                                id="validationCustomUsername"
                                                placeholder="Masukan Nomor Kartu Tanda Anggota (KTA)">
                                            @error('ktp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Nomor Kartu
                                            Tanda Penduduk (KTP)</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="bi bi-credit-card-fill"></i> </span>
                                            <input name="ktp" value="{{ old('ktp', $kta->ktp) }}" type="text"
                                                class="form-control  @error('ktp') is-invalid @enderror"
                                                id="validationCustomUsername"
                                                placeholder="Masukan Nomor Kartu Tanda Penduduk (KTP)">
                                            @error('ktp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-3">
                                            <label class="text-label form-label" for="validationCustomUsername">Gelar
                                                Depan</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-badge-cc"></i>
                                                </span>
                                                <input name="gelar_depan"
                                                    value="{{ old('gelar_depan', $kta->gelar_depan) }}" type="text"
                                                    class="form-control @error('gelar_depan') is-invalid @enderror"
                                                    id="validationCustomUsername" placeholder="Gelar Depan">
                                                @error('gelar_depan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label" for="validationCustomUsername">Nama
                                                Lengkap</label>
                                            <div class="input-group">
                                                <br>
                                                <span class="input-group-text"> <i class="bi bi-person-bounding-box"></i>
                                                </span>
                                                <input name="nama" value="{{ old('nama', $kta->nama) }}" type="text"
                                                    class="form-control @error('nama') is-invalid @enderror"
                                                    id="validationCustomUsername" placeholder="Nama Lengkap">
                                                @error('nama')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label class="text-label form-label" for="validationCustomUsername">Gelar
                                                Belakang</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-badge-cc"></i>
                                                </span>
                                                <input name="gelar_belakang"
                                                    value="{{ old('gelar_belakang', $kta->gelar_belakang) }}"
                                                    type="text"
                                                    class="form-control @error('gelar_belakang') is-invalid @enderror"
                                                    id="validationCustomUsername" placeholder="Gelar Belakang">
                                                @error('gelar_belakang')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row ">
                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label" for="validationCustomUsername">Tempat
                                                Lahir</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-house-door-fill"></i>
                                                </span>
                                                <input name="tempat_lahir"
                                                    value="{{ old('tempat_lahir', $kta->tempat_lahir) }}" type="text"
                                                    class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                    id="validationCustomUsername" placeholder="Masukan tempat lahir">
                                                @error('tempat_lahir')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label" for="validationCustomUsername">Tanggal
                                                Lahir</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-calendar4-event"></i>
                                                </span>
                                                <input name="tanggal_lahir"
                                                    value="{{ old('tanggal_lahir', $kta->tanggal_lahir) }}"
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
                                    </div>

                                    <div class="row ">
                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label" for="validationCustomUsername">Jenis
                                                Kelamin</label>
                                            <div class="input-group">
                                                <select name="jenis_kelamin"
                                                    class="default-select form-control wide mb-3 @error('jenis_kelamin') is-invalid @enderror">
                                                    <option value="">Pilih</option>
                                                    @foreach ($jenis_kelamin as $item)
                                                        @if (old('jenis_kelamin', $kta->jenis_kelamin) == $item)
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
                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label" for="validationCustomUsername">Status
                                                Perkawinan</label>
                                            <div class="input-group">
                                                <select name="status_perkawinan"
                                                    class="default-select form-control wide mb-3 @error('status_perkawinan') is-invalid @enderror">
                                                    <option value="">Pilih</option>
                                                    @foreach ($status_perkawinan as $item)
                                                        @if (old('status_perkawinan', $kta->status_perkawinan) == $item)
                                                            <option value="{{ $item }}" selected>
                                                                {{ $item }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $item }}">{{ $item }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('status_perkawinan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row ">
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label"
                                                for="validationCustomUsername">Agama</label>
                                            <div class="basic-form">
                                                <select name="agama"
                                                    class="default-select form-control wide mb-3 @error('agama') is-invalid @enderror">
                                                    <option value="">Pilih</option>
                                                    @foreach ($agama as $item)
                                                        @if (old('agama', $kta->agama) == $item->id)
                                                            <option value="{{ $item->id }}" selected>
                                                                {{ $item->nama }}</option>
                                                        @else
                                                            <option value="{{ $item->id }}">{{ $item->nama }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('agama')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label"
                                                for="validationCustomUsername">Pekerjaan</label>
                                            <div class="basic-form">
                                                <select name="pekerjaan" id="single-select"
                                                    class="single-select-placeholder js-states @error('pekerjaan') is-invalid @enderror">
                                                    <option value="">Pilih</option>
                                                    @foreach ($pekerjaan as $item)
                                                        @if (old('pekerjaan', $kta->pekerjaan) == $item->id)
                                                            <option value="{{ $item->id }}" selected>
                                                                {{ $item->nama }}</option>
                                                        @else
                                                            <option value="{{ $item->id }}">{{ $item->nama }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('pekerjaan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label" for="validationCustomUsername">Pendidikan
                                                Terakhir</label>
                                            <div class="basic-form">
                                                <select name="pendidikan_terakhir"
                                                    class="default-select form-control wide mb-3 @error('pendidikan_terakhir') is-invalid @enderror">
                                                    <option value="">Pilih</option>
                                                    @foreach ($pendidikan as $item)
                                                        @if (old('pendidikan_terakhir', $kta->pendidikan_terakhir) == $item->id)
                                                            <option value="{{ $item->id }}" selected>
                                                                {{ $item->nama }}</option>
                                                        @else
                                                            <option value="{{ $item->id }}">{{ $item->nama }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('pendidikan_terakhir')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="card-header">
                                        <h4 class="card-title">Kontak Anggota</h4>
                                    </div>

                                    <div class="row ">
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label"
                                                for="validationCustomUsername">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-envelope"></i>
                                                </span>
                                                <input name="email" value="{{ old('email', $kta->email) }}"
                                                    type="text"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    id="validationCustomUsername" placeholder="Masukan email aktif">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label"
                                                for="validationCustomUsername">No.Hp</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="bi bi-telephone-fill"></i>
                                                </span>
                                                <input name="no_hp" value="{{ old('no_hp', $kta->no_hp) }}"
                                                    type="text"
                                                    class="form-control @error('no_hp') is-invalid @enderror"
                                                    id="validationCustomUsername" placeholder="Masukan No.Hp Aktif">
                                                @error('no_hp')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label" for="validationCustomUsername">
                                                No. Wa</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-whatsapp"></i>
                                                </span>
                                                <input name="no_wa" value="{{ old('no_wa', $kta->no_wa) }}"
                                                    type="text"
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
                                                Facebook</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-facebook"></i>
                                                </span>
                                                <input name="facebook" value="{{ old('facebook', $kta->facebook) }}"
                                                    type="text"
                                                    class="form-control @error('facebook') is-invalid @enderror"
                                                    id="validationCustomUsername"
                                                    placeholder="Contoh : facebook.com/jonahtan.wongkar/">
                                                @error('facebook')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label" for="validationCustomUsername">Akun
                                                Instagram</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-instagram"></i>
                                                </span>
                                                <input name="instagram" value="{{ old('instagram', $kta->instagram) }}"
                                                    type="text"
                                                    class="form-control @error('facebook') is-invalid @enderror"
                                                    id="validationCustomUsername" placeholder="contoh : @jonathanwongkar">
                                                @error('facebook')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label" for="validationCustomUsername">Akun
                                                TikTok</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-film"></i>
                                                </span>
                                                <input name="tiktok" value="{{ old('tiktok', $kta->tiktok) }}"
                                                    type="text"
                                                    class="form-control @error('tiktok') is-invalid @enderror"
                                                    id="validationCustomUsername" placeholder="contoh : @jonathan">
                                                @error('tiktok')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h4 class="card-title">Kewilayahan Anggota</h4>
                                    </div>

                                    <div class="row ">
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label" for="validationCustomUsername">Kabupaten
                                                / Kota </label>
                                            <div class="basic-form">
                                                <select name="kabkota"
                                                    class="single-select-placeholder js-states @error('kabkota') is-invalid @enderror">
                                                    @foreach ($kabkota as $item)
                                                        @if ($kta->kabkota == $item->id)
                                                            <option value="{{ $item->id }}" selected>
                                                                {{ $item->id }} - {{ $item->nama }}</option>
                                                        @else
                                                            <option value="{{ $item->id }}"> {{ $item->id }} -
                                                                {{ $item->nama }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('kabkota')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label"
                                                for="validationCustomUsername">Kecamatan</label>
                                            <div class="input-group">
                                                <select name="kecamatan"
                                                    class="single-select-placeholder js-states @error('kecamatan') is-invalid @enderror">
                                                    <option value="">Pilih</option>
                                                    @foreach ($kecamatan as $item)
                                                        @if ($kta->kecamatan == $item->id)
                                                            <option value="{{ $item->id }}" selected>
                                                                {{ $item->id }} - {{ $item->nama }}</option>
                                                        @else
                                                            <option value="{{ $item->id }}">{{ $item->id }} -
                                                                {{ $item->nama }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('kecamatan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="text-label form-label"
                                                for="validationCustomUsername">Kelurahan/Desa</label>
                                            <div class="input-group">
                                                <select name="kelurahan_desa"
                                                    class="single-select-placeholder js-states @error('kelurahan_desa') is-invalid @enderror">
                                                    @foreach ($kelurahan_desa as $item)
                                                        @if ($kta->kelurahan_desa == $item->id)
                                                            <option value="{{ $item->id }}" selected>
                                                                {{ $item->id }} -
                                                                {{ $item->nama }}</option>
                                                        @else
                                                            <option value="{{ $item->id }}">{{ $item->id }} -
                                                                {{ $item->nama }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('kelurahan_desa')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="mb-3 col-md-2">
                                            <label class="text-label form-label" for="validationCustomUsername">Rt</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-house"></i>
                                                </span>
                                                <input name="rt" value="{{ old('rt', $kta->rt) }}" type="text"
                                                    class="form-control @error('rt') is-invalid @enderror"
                                                    id="validationCustomUsername" placeholder="rt">
                                                @error('rt')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 col-md-2">
                                            <label class="text-label form-label" for="validationCustomUsername">Rw</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-house"></i>
                                                </span>
                                                <input name="rw" value="{{ old('rw', $kta->rw) }}" type="text"
                                                    class="form-control @error('rw') is-invalid @enderror"
                                                    id="validationCustomUsername" placeholder="rw">
                                                @error('rw')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 col-md-8">
                                            <label class="text-label form-label"
                                                for="validationCustomUsername">Alamat</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="bi bi-house"></i>
                                                </span>
                                                <input name="alamat_detail"
                                                    value="{{ old('alamat_detail', $kta->alamat_detail) }}"
                                                    type="text"
                                                    class="form-control @error('alamat_detail') is-invalid @enderror"
                                                    id="validationCustomUsername"
                                                    placeholder="Masukan alama contoh : jl. 17 agustus no.1">
                                                @error('alamat_detail')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="card-header">
                                        <h4 class="card-title">Foto Anggota</h4>
                                    </div>

                                    <div class="row ">
                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label" for="validationCustomUsername">Foto
                                                Profil </label>
                                            <div class="input-group">

                                                <div class="form-file">
                                                    <input name="foto" type="file"
                                                        class="form-file-input form-control @error('foto') is-invalid @enderror"
                                                        id="image1" onchange="priviewImage1()">
                                                </div>
                                                <span class="input-group-text">Upload</span>
                                                @error('foto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <div>
                                                    <img src="{{ $kta->foto }}" class="img-preview1 img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="text-label form-label" for="validationCustomUsername">Foto
                                                PDH</label>
                                            <div class="input-group">
                                                <div class="form-file">
                                                    <input name="foto_pdh" type="file"
                                                        class="form-file-input form-control @error('foto_pdh') is-invalid @enderror"
                                                        id="image2" onchange="priviewImage2()">
                                                </div>
                                                <span class="input-group-text">Upload</span>
                                                @error('foto_pdh')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div>
                                                <img src="{{ $kta->foto_pdh }}" class="img-preview2 img-fluid">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="invalidCheck2" required>
                                            <label class="form-check-label" for="invalidCheck2">
                                                Anda yakin data yang di edit sudah benar ?
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn me-2 btn-primary">Perbaharui Data</button>
                                    <a href="/kta" class="btn btn-light">Batal</a>
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
    <script src="{{ asset('') }}assets/vendor/global/global.min.js"></script>
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
