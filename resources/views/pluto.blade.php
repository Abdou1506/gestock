<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="{{ asset('images/fevicon.png" type="image/png') }}" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <!-- color css -->
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
   li
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            @include('side', ['nom' => 'abdou ndiaye', 'role' => 'admin'])
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                @include('topbar', ['nom' => 'abdou ndiaye', 'role' => 'admin'])
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="col-md-12 m-3 text-center">
                        <h3>
                            @yield('titre')
                        </h3>
        
                        <div class="container-fluid">
                            <!-- notice -->
                            @if (session('notice'))
                                <div class="alert alert-info">
                                    {{ session('notice') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                @foreach ($errors->all() as $e)
                                    <ul class="alert alert-danger col-md-4 mx-auto text-danger">
                                        <li>{{ $e }}</li>
                                    </ul>
                                @endforeach

                            @endif
                            @yield('contenu')
                        </div>
                    </div>


                    <!-- footer -->
                    <div class="container-fluid ">
                        <div class="footer fixed">
                            <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                                Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end dashboard inner -->
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- wow animation -->
    <script src="{{ asset('js/animate.js') }}"></script>
    <!-- select country -->
    <script src="{{ asset('js/bootstrap-select.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <!-- chart js -->
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('js/analyser.js') }}"></script>
    <!-- nice scrollbar -->
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/chart_custom_style1.js') }}"></script>

@stack('scripts')

</body>

</html>
