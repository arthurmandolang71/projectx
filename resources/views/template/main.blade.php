<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi Kawal Suara" />
    <meta property="og:title" content="Aplikasi Kawal Suara" />
    <meta property="og:description" content="Aplikasi Kawal Suara" />
    <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>KAWAL SUARA</title>

    @yield('header')

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('') }}assets/images/logosementara.png" />
    <!-- Custom Stylesheet -->


    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/jquery-nice-select/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">

</head>

<body>
    @php
        $color = session()->get('color');
        $logo_text = session()->get('logo_text');
        $logo = session()->get('logo');
        // dd($logo);
    @endphp


    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <img src="{{ asset('') }}assets/images/logo/{{ $logo }}" class="logo-abbr" width="53"
            height="53" viewBox="0 0 53 53"> <br>
        <div class="waviy">
            <span style="--i:1">K</span>
            <span style="--i:2">A</span>
            <span style="--i:3">W</span>
            <span style="--i:4">W</span>
            <span style="--i:5">A</span>
            <span style="--i:6">L</span>
            <span style="--i:7"> </span>
            <span style="--i:8">S</span>
            <span style="--i:9">U</span>
            <span style="--i:10">A</span>
            <span style="--i:11">R</span>
            <span style="--i:12">R</span>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('template.navbar')
        <!--**********************************
            Nav header end
        ***********************************-->


        <!--**********************************
            Header start
        ***********************************-->
        @include('template.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->


        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('template.menu')
        <!--**********************************
            Sidebar end
        ***********************************-->



        <!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        @include('template.footer')
        <!--**********************************
            Footer end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('') }}assets/vendor/global/global.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>



    @yield('footer')

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('') }}assets/js/custom.min.js"></script>
    {{-- <script src="{{ asset('') }}assets/js/dlabnav-init.js"></script> --}}

    <script>
        "use strict"

        var dezSettingsOptions = {};

        function getUrlParams(dParam) {
            var dPageURL = window.location.search.substring(1),
                dURLVariables = dPageURL.split('&'),
                dParameterName,
                i;

            for (i = 0; i < dURLVariables.length; i++) {
                dParameterName = dURLVariables[i].split('=');

                if (dParameterName[0] === dParam) {
                    return dParameterName[1] === undefined ? true : decodeURIComponent(dParameterName[1]);
                }
            }
        }

        (function($) {

            "use strict"

            dezSettingsOptions = {
                typography: "cairo",
                version: "light",
                layout: "horizontal",
                primary: "{{ $color }}",
                navheaderBg: "{{ $color }}",
                sidebarBg: "{{ $color }}",
                sidebarStyle: "full",
                sidebarPosition: "fixed",
                headerPosition: "fixed",
                containerLayout: "full",
            };

            new dezSettings(dezSettingsOptions);

            jQuery(window).on('resize', function() {
                /*Check container layout on resize */
                //alert(dezSettingsOptions.primary);
                dezSettingsOptions.containerLayout = $('#container_layout').val();
                /*Check container layout on resize END */

                new dezSettings(dezSettingsOptions);
            });

        })(jQuery);
    </script>




</body>

</html>
