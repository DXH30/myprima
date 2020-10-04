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
                                            <h5>Buat Thread disini {{$auth->name}} !</h5>
                                            <p class="text-muted"></p>
                                            <form action="{{url('thread')}}" method="POST">
                                                @csrf
                                                <div class="form-group form-row">
                                                    <label class="col-form-label col-sm-2" for="title">Judul</label>
                                                    <div class="col-sm-10">
                                                        <input id="title" type="text" class="form-control" name="title" placeholder="Judul">
                                                    </div>
                                                </div>
                                                <div class="form-group form-row">
                                                    <label class="col-form-label col-sm-2" for="description">Deskripsi</label>
                                                    <div class="col-sm-10">
                                                        <input id="description" type="text" class="form-control"
                                                        name="description" placeholder="Deskripsi [Yang Tampil]">
                                                    </div>
                                                </div>
                                                <div class="from-group form-row">
                                                    <label for="deptauth" class="col-sm-2">Dept Auth</label>
                                                    <div class="col-sm-10">
                                                        <select id="deptauth"
                                                                name="deptauth[]" 
                                                                class="selectize" 
                                                                placeholder="Pilih semua department yang diberi ijin"
                                                                multiple>
                                                            @foreach($department as $dept)
                                                            <option value="{{$dept->id}}">{{$dept->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <textarea class="summernote" name="content"></textarea>
                                                <input type="submit" class="btn btn-block btn-info" value="Kirim">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>List Thread</h5>
                                            @foreach($thread as $t)
                                            <p>
                                            <h6>{{$t->title}}</h6>
                                            {{$t->description}} <br/>
                                            <a href="{{url('thread/baca').'/'.$t->id}}">Baca</a><br />
                                            Created at {{$t->created_at}} <br />
                                            Updated at {{$t->updated_at}} <br />
                                            Diketik oleh {{$user->where('id', $t->userid)->first()->name}} <br />
                                            </p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row -->
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
<!-- Summernote js -->
<script src="{{URL::asset('/libs/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{URL::asset('/libs/selectize/js/standalone/selectize.min.js')}}"></script>

<script>
$(document).ready(function(){
    var $deptauth = $(".selectize").selectize();
    $(".summernote").summernote({height:250,minHeight:null,maxHeight:null,focus:!1}),$(".summernote-inline").summernote({airMode:!0})
});
</script>
@endsection
