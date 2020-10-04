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
                            <h4 class="page-title mb-1">{{$title}}</h4>
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
                                        <div class="col-12">
                                            <h4>Edit Department</h4>
                                            <p class="text-muted">
                                            <form action="{{url('edepartment')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$curdept->id}}">
                                                <div class="from-group form-row">
                                                    <label for="deptauth" class="col-sm-2">Dept Auth</label>
                                                    <div class="col-sm-10">
<?php 
$curdeptauth = json_decode($curdept->deptauth);
?>
                                                        <select id="deptauth"
                                                                name="deptauth[]" 
                                                                class="selectize" 
                                                                placeholder="Pilih semua department yang diberi ijin"
                                                                multiple>
                                                            @foreach($department as $dept)
                                                            @foreach($curdeptauth as $cd)
                                                            @if ($cd == $dept->id)
                                                            <option value="{{$dept->id}}" selected>{{$dept->name}}</option>
                                                            @else
                                                            <option value="{{$dept->id}}">{{$dept->name}}</option>
                                                            @endif
                                                            @endforeach
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group form-row">
                                                    <label for="name" class="col-sm-2">Name</label>
                                                    <div class="col-sm-10">
                                                        <input id="name" type="text" name="name" class="form-control" value="{{$curdept->name}}">
                                                    </div>
                                                </div>
                                                <div class="form-group form-row">
                                                    <label for="description" class="col-sm-2">Description</label>
                                                    <div class="col-sm-10">
                                                        <input type="test" class="form-control" name="description" value="{{$curdept->description}}">
                                                    </div>
                                                </div>
                                                <input type="submit" class="btn btn-info" value="Update">
                                            </form>
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

<script src="{{URL::asset('/js/pages/dashboard.init.js')}}"></script>

<script src="{{URL::asset('/js/app.js')}}"></script>

<!-- Required datatable js -->

<script src="{{URL::asset('/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>

<script src="{{URL::asset('/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<!-- Buttons examples -->

<script src="{{URL::asset('/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>

<script src="{{URL::asset('/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>

<script src="{{URL::asset('/libs/jszip/jszip.min.js')}}"></script>

<script src="{{URL::asset('/libs/pdfmake/build/pdfmake.min.js')}}"></script>

<script src="{{URL::asset('/libs/pdfmake/build/vfs_fonts.js')}}"></script>

<script src="{{URL::asset('/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>

<script src="{{URL::asset('/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>

<script src="{{URL::asset('/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('/libs/selectize/js/standalone/selectize.min.js')}}"></script>
<script>
    $(document).ready(function(){
            var $deptauth = $(".selectize").selectize();
            $("#muser_table")
                .DataTable();
        });
</script>
@endsection
