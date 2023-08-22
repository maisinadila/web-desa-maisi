@php

function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
}
@endphp




<!doctype html>
<html lang="en">

<head>
    <title>Desa {{ucwords(App\Models\Pengaturan::first()->nama_desa)}}</title>
    @include('admin.template.section.assets')

    @stack('stylecustom')
</head>
<body data-theme="light" class="font-nunito">
    <div id="wrapper" class="theme-cyan">

        <!-- proses menghilangakn TTD -->
        @php
        $url =  url()->current();
        @endphp

        @if(Auth::user()->level == 2)
            @php App\Models\Ttd::where('url',$url)->update([
                'status' => 1,
            ]);
        @endphp
        @endif
        <!-- end proses -->

        
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="{{url('public')}}/assets-admin/images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
                <p>Please wait...</p>
            </div>
        </div>

        <!-- Top navbar div start -->
        <nav class="navbar navbar-fixed-top">
            @include('admin.template.section.header')
        </nav>

        <!-- main left menu -->
        <div id="left-sidebar" class="sidebar">
            <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <img src="{{url('public')}}/assets-admin/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                    <div class="dropdown">
                        <span>Selamat Datang,</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Admin Desa {{ucwords(App\Models\Pengaturan::first()->nama_desa)}} </strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <li><a href="{{url('logout')}}"><i class="icon-power"></i>Logout</a></li>
                        </ul>
                    </div>
                    <hr>

                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
                    <li class="nav-item ml-auto"><a class="nav-link" data-toggle="tab" href="#setting"><i class="fa fa-gear"></i></a></li>              
                </ul>
                
                <!-- Tab panes -->

                @include('admin.template.section.sidebar')          
            </div>
        </div>



        <!-- mani page content body part -->
        <div id="main-content">
            <div class="container-fluid mb-3">
                @include('admin.template.utils.notif')
                @yield('content')
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


    <!-- Javascript -->
    <script src="{{url('public')}}/assets-admin/bundles/libscripts.bundle.js"></script>    
    <script src="{{url('public')}}/assets-admin/bundles/vendorscripts.bundle.js"></script>

    <!-- page vendor js file -->
    <script src="{{url('public')}}/assets-admin/vendor/toastr/toastr.js"></script>
    <script src="{{url('public')}}/assets-admin/bundles/c3.bundle.js"></script>

    <!-- page js file -->
    <script src="{{url('public')}}/assets-admin/bundles/mainscripts.bundle.js"></script>
    <script src="{{url('public')}}/assets-admin/js/index.js"></script>



    <script src="{{url('public')}}/assets-admin/vendor/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
    <script src="{{url('public')}}/assets-admin/vendor/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->
    <script src="{{url('public')}}/assets-admin/bundles/mainscripts.bundle.js"></script>
    <script src="{{url('public')}}/assets-admin/js/pages/forms/form-wizard.js"></script>


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>

        let table = new DataTable('.table');

    </script>

    @stack('jscustom')

    <script src="{{url('public')}}/assets-admin/vendor/summernote/dist/summernote.js"></script>

<script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
            popover: { image: [], link: [], air: [] }
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function() {
            $(".click2edit").summernote()
        },
        
    window.save = function() {
        $(".click2edit").summernote('destroy');
    }
</script>

</body>
</html>