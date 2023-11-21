@extends('template.main')

@section('header')
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/datatables/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
@endSection

@section('content')
    <div class="content-body">
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <div class="media ai-icon">
                                <span class="me-3 bgl-primary text-primary">
                                    <!-- <i class="ti-user"></i> -->
                                    <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30"
                                        height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Total Pendukung</p>
                                    <h4 class="mb-0">{{ $total_pendukung }}</h4>
                                    <a href="/pendukungcaleg/dash?prov=71" target="_blank">><span
                                            class="badge badge-primary">Dashboard</span></a>
                                    <a href="/pendukungcaleg/index" target="_blank"><span
                                            class="badge badge-primary">Data</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card">
                        <div class="card-body p-4">
                            <div class="media ai-icon">
                                <span class="me-3 bgl-primary text-primary">
                                    <!-- <i class="ti-user"></i> -->
                                    <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30"
                                        height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Total Relawan</p>
                                    <h4 class="mb-0">{{ $total_relawan }}</h4>
                                    <a href="/relawan" target="_blank">><span class="badge badge-primary">Data
                                            Relawan</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-xl-12 col-xxl-12 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-body ">
                                <h4 class="card-title">Total Pendukung</h4>
                                <h3>{{ $total_pendukung }}</h3>
                                <div class="progress mb-2">
                                    @php
                                        // dd($target_pengurus);
                                        if ($total_pendukung > 0 and $caleg->target_pendukung > 0) {
                                            $persen = ($total_pendukung / $caleg->target_pendukung) * 100;
                                        } else {
                                            $persen = 0;
                                        }

                                    @endphp
                                    <div class="progress-bar progress-animated bg-primary"
                                        style="width: {{ $persen }}%"></div>
                                </div>
                                <h4>{{ number_format($persen, 2, '.', '') }}% dari target pendukung
                                    {{ $caleg->target_pendukung }} </h4>

                                <hr>

                                <div class="row">
                                    <div class="col-6">
                                        <p>Total klasifikasi : </p>
                                        <ul class="list-group list-group-flush">
                                            @if ($list_klasifikasi)
                                                @foreach ($list_klasifikasi as $item)
                                                    <li class="list-group-item d-flex px-0 justify-content-between">
                                                        <strong>{{ $item['nama'] }}</strong>
                                                        <a href="" target="_blank"><span
                                                                class="badge badge-rounded badge-primary">Total
                                                                {{ $item['jumlah'] }}</span></a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>

                                    </div>
                                    <div class="col-6">
                                        <p>Total Bantuan/Program : </p>
                                        <ul class="list-group list-group-flush">
                                            @if ($list_bantuan)
                                                @foreach ($list_bantuan as $item)
                                                    <li class="list-group-item d-flex px-0 justify-content-between">
                                                        <strong>{{ $item['nama'] }}</strong>
                                                        <a href="" target="_blank"><span
                                                                class="badge badge-rounded badge-primary">Total :
                                                                {{ $item['jumlah'] }} </span></a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>

                                    </div>
                                </div>



                            </div>
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
