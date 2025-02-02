@extends('template.main')

@section('header')
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/datatables/css/jquery.dataTables.min.css">
@endSection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Pendukung</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Print Pendukung</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">

                        @if (session()->has('pesan'))
                            <div class="container text-center">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    {{ session('pesan') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        @endif

                        <!--********************************** content start ***********************************-->

                        <div class="card-body">

                            <!-- start content -->
                            <div class="container">
                                <form action="/pendukungcaleg/pilih_print" method="get">
                                    <input type="hidden" value="1" name="is_cetak">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" for="multicol-country">Kabupaten / kota</label>
                                            <select id="kabkota" name="kabkota" class="select2 form-select"
                                                data-allow-clear="true">
                                                @if ($select_kabkota)
                                                    <option value="{{ $select_kabkota['id'] }}"> Pencarian
                                                        {{ $select_kabkota['nama'] }}</option>
                                                @else
                                                    <option value="" selected>Pilih Kabkota</option>
                                                @endif

                                                @foreach ($kabkota_list as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                            <hr>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="multicol-country">Kecamatan</label>
                                            <select id="kecamatan" name="kecamatan" class="select2 form-select"
                                                data-allow-clear="true">
                                                @if ($select_kecamatan)
                                                    <option value="{{ $select_kecamatan['id'] }}"> Pencarian
                                                        {{ $select_kecamatan['nama'] }}</option>
                                                @endif
                                                <option value="">Pilih</option>
                                            </select>
                                            <hr>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="multicol-country">Kelurahan/Desa</label>
                                            <select id="kelurahandesa" name="kelurahandesa" class="select2 form-select"
                                                data-allow-clear="true">
                                                @if ($select_kelurahandesa)
                                                    <option value="{{ $select_kelurahandesa['id'] }}"> Pencarian
                                                        {{ $select_kelurahandesa['nama'] }}</option>
                                                @endif
                                                <option value="">Pilih</option>
                                            </select>
                                            <hr>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="multicol-country">TPS</label>
                                            <select id="tps" name="tps" class="select2 form-select"
                                                data-allow-clear="true">
                                                @if ($select_tps)
                                                    <option value="{{ $select_tps }}"> Pencarian TPS
                                                        {{ $select_tps }}</option>
                                                @endif
                                                <option value="">Pilih</option>
                                            </select>
                                            <hr>
                                        </div>
                                        <hr>
                                        <div class="col-md-4">
                                            <label class="form-label" for="multicol-country">Referensi</label>
                                            <select id="referensi" name="referensi" class="select2 form-select"
                                                data-allow-clear="true">
                                                @if ($select_referensi)
                                                    <option value="{{ $select_referensi['id'] }}"> Pencarian
                                                        {{ $select_referensi['nama'] }}</option>
                                                @else
                                                    <option value="" selected>Pilih referensi</option>
                                                @endif

                                                @foreach ($referensi_list as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                            <hr>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="multicol-country">Progam/bantuan</label>
                                            <select id="bantuan" name="bantuan" class="select2 form-select"
                                                data-allow-clear="true">
                                                @if ($select_bantuan)
                                                    <option value="{{ $select_bantuan['id'] }}"> Pencarian
                                                        {{ $select_bantuan['nama'] }}</option>
                                                @else
                                                    <option value="" selected>Pilih bantuan</option>
                                                @endif

                                                @foreach ($bantuan_list as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                            <hr>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="multicol-country">Klasifikasi</label>
                                            <select id="klasifikasi" name="klasifikasi" class="select2 form-select"
                                                data-allow-clear="true">
                                                @if ($select_klasifikasi)
                                                    <option value="{{ $select_klasifikasi['id'] }}"> Pencarian
                                                        {{ $select_klasifikasi['nama'] }}</option>
                                                @else
                                                    <option value="" selected>Pilih klasifikasi</option>
                                                @endif

                                                @foreach ($klasifikasi_list as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                            <hr>
                                        </div>


                                        <div class="col-md-12">
                                            <button type="submit" href="/dpt/create"
                                                class="btn btn-block btn-primary"><span
                                                    class="btn-icon-start text-primary"><i class="fa fa-print"></i>
                                                </span>Print!</button>
                                        </div>
                                    </div>
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
    <!-- Datatable -->
    <script src="{{ asset('') }}assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}assets/js/plugins-init/datatables.init.js"></script>
@endSection



<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
    integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {

        // Department Change
        $('#kabkota').change(function() {

            // Department id
            var id = $(this).val();

            // Empty the dropdown
            $('#kecamatan').find('option').not(':first').remove();

            // AJAX request 
            $.ajax({
                url: '/get_kecamatan/dptcaleg/' + id,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    console.log(response['data']);

                    var len = 0;
                    if (response['data'] != null) {
                        len = response['data'].length;
                    }

                    if (len > 0) {
                        // Read data and create <option >
                        for (var i = 0; i < len; i++) {

                            var id = response['data'][i].id;
                            var nama = response['data'][i].nama;

                            var option = "<option value='" + id + "'>" + nama + "</option>";

                            $("#kecamatan").append(option);
                        }
                    }

                }
            });
        });
    });
</script>

{{-- get kelurahan --}}
<script>
    $(document).ready(function() {

        // Department Change
        $('#kecamatan').change(function() {
            var id = $(this).val();
            // Empty the dropdown
            $('#kelurahandesa').find('option').not(':first').remove();

            // AJAX request 
            $.ajax({
                url: '/get_kelurahandesa/dptcaleg/' + id,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    console.log(response['data']);

                    var len = 0;
                    if (response['data'] != null) {
                        len = response['data'].length;
                    }

                    if (len > 0) {
                        // Read data and create <option >
                        for (var i = 0; i < len; i++) {

                            var id = response['data'][i].id;
                            var nama = response['data'][i].nama;

                            var option = "<option value='" + id + "'>" + nama + "</option>";

                            $("#kelurahandesa").append(option);
                        }
                    }

                }
            });
        });
    });
</script>

{{-- get tps --}}
<script>
    $(document).ready(function() {

        // Department Change
        $('#kelurahandesa').change(function() {

            // Department id
            var id = $(this).val();

            // Empty the dropdown
            $('#tps').find('option').not(':first').remove();

            // AJAX request 
            $.ajax({
                url: '/get_tps/dptcaleg/' + id,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    console.log(response['data']);

                    var len = 0;
                    if (response['data'] != null) {
                        len = response['data'].length;
                    }

                    if (len > 0) {
                        // Read data and create <option >
                        for (var i = 0; i < len; i++) {

                            var id = response['data'][i].id;
                            var nama = response['data'][i].nama;

                            var option = "<option value='" + nama + "'>" + nama +
                                "</option>";

                            $("#tps").append(option);
                        }
                    }

                }
            });
        });
    });
</script>
