
     <script src="{{ asset('assets/js/loader.js') }}"></script>
    <link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/structure.css') }}" rel="stylesheet" type="text/css" class="structure" />

    <link href="{{ asset('plugins/font-icons/fontawesome/css/fontawesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/elements/avatar.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/notification/snackbar/snackbar.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/widgets/modules-widgets.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">

    <link  href="{{ asset('plugins/flatpickr/flatpickr.dark.css') }}" rel="stylesheet" type="text/css">

    {{-- full calendario local --}}
    {{-- <link  href="{{ asset('plugins/fullcalendar/main.min.css') }}" rel="stylesheet" type="text/css"> --}}

    {{-- full calendario web --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css"> --}}

    {{-- <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" class="dashboard-sales" /> --}}


    <style>
        aside {
            display: none!important;
        }
        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #3b3f5c;
            border-color: #3b3f5c;
        }

        @media (max-width: 480px)
        {
            .mtmobile {
                margin-bottom: 20px!important;
            }
            .mbmobile {
                margin-bottom: 10px!important;
            }
            .hideonsm {
                display: none!important;
            }
            .inblock {
                display: block;
            }
        }

        /*sidebar background*/
        .sidebar-theme #compactSidebar {
            background: #191e3a!important;
        }

        /*sidebar collapse background */
        .header-container .sidebarCollapse {
            color: #3B3F5C!important;
        }

        .navbar .navbar-item .nav-item form.form-inline input.search-form-control {
            font-size: 15px;
            background-color: #3B3F5C!important;
            padding-right: 40px;
            padding-top: 12px;
            border: none;
            color: #fff;
            box-shadow: none;
            border-radius: 30px;
        }


    </style>

@livewireStyles


