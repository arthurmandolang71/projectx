@extends('template.main')

@section('header')
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/datatables/css/jquery.dataTables.min.css">
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"> --}}
@endSection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="/relawan/">Relawan</a></li>
                    <li class="breadcrumb-item"><a href="">Data Relawan</a></li>
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
                            <div class="col-md-4">
                                <a href="/relawan/create" class="btn btn-block btn-primary"><span
                                        class="btn-icon-start text-primary"><i class="fa fa-plus"></i>
                                    </span>Tambah Relawan</a>
                            </div>
                            <br>

                            <div class="table-responsive">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>No.Wa</th>
                                            <th>Keterangan</th>
                                            <th>status</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($relawan as $item)
                                            <tr>
                                                <td>{{ $item->nama }} <br>
                                                    {{-- <span>{{ $item->tim_ref->nama }}</span> --}}
                                                </td>
                                                <td>{{ $item->no_wa }}</td>
                                                <td>{{ $item->keterangan }}</td>
                                                <td>
                                                    @if ($item->is_active)
                                                        <span class="badge badge-lg light badge-primary">Aktif</span>
                                                    @else
                                                        <span class="badge badge-lg light badge-danger">Tidak
                                                            Aktif</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="/relawan/{{ $item->id }}/edit"
                                                        class="btn btn-rounded btn-primary"><span
                                                            class="btn-icon-start text-primary"><i class="fa fa-edit"></i>
                                                        </span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>username</th>
                                            <th>No.Wa</th>
                                            <th>Keterangan</th>
                                            <th>status</th>
                                        </tr>
                                    </tfoot>
                                </table>
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
