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
                                            <h2>{{$title}}</h2>
                                            <h3>{{$description}}</h3>
                                            <p>
                                            <div>
                                                <?php echo htmlspecialchars_decode($content); ?>
                                            </div>
                                            Created at {{$created_at}} <br />
                                            Updated at {{$updated_at}} <br />
                                            </p>
                                            @foreach($comment as $c)
                                            <h3>oleh : {{$user->where('id',$c->userid)->first()->name}}</h3>
                                            <?php echo htmlspecialchars_decode($c->content); ?>
                                            <h4>Dibuat : {{$c->created_at}} | Dimodif : {{$c->updated_at}}</h4>
                                            @endforeach
                                            <h5>Balas sebagai {{$auth->name}}</h5>
                                            <form action="{{url('comment').'/'.$threadid}}" method="POST">
@csrf
                                                <div class="form-group form-row">
                                                    <textarea class="summernote" id="content" name="content" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="form-group form-row">
                                                    <input type="submit" value="comment">
                                                </div>
                                            </form>
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
