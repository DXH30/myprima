@extends('layouts.dashboard')
@section('title', $title)
@section('content')
<!-- Begin page -->
<div id="layout-wrapper">
@include('layouts.header')
    

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title mb-1">Dashboard</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Selamat Datang di MyPrima {{$auth->name}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->

            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Selamat datang {{$auth->name}} !</h5>
                                            <p class="text-muted">
                                            Selamat datang di MyPrima. Situs ini ditujukan untuk manajemen
                                            project dan Project Tracking. Untuk lebih lengkapnya tentang tata cara
                                            penggunaan dapat dilihat di dokumen berikut ini.
                                            </p>

                                            <div class="mt-4">
                                                <a href="{{url('#')}}" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ml-1"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-5 ml-auto">
                                            <div>
                                                <img src="{{URL::asset('/images/widget-img.png')}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->
            </div>
            <!-- end page-content-wrapper -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        2020 © Primakom
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> Primakom
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->
<script src="{{URL::asset('/libs/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{URL::asset('/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{URL::asset('/libs/node-waves/waves.min.js')}}"></script>

<script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

<!-- datepicker -->
<script src="{{URL::asset('/libs/air-datepicker/js/datepicker.min.js')}}"></script>
<script src="{{URL::asset('/libs/air-datepicker/js/i18n/datepicker.en.js')}}"></script>

<!-- apexcharts -->
<script src="{{URL::asset('/libs/apexcharts/apexcharts.min.js')}}"></script>

<script src="{{URL::asset('/libs/jquery-knob/jquery.knob.min.js')}}"></script> 

<!-- Jq vector map -->
<script src="{{URL::asset('/libs/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('/libs/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{URL::asset('/js/app.js')}}"></script>
@endsection
