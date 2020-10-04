<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>{{$title}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::asset('/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{URL::asset('/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{URL::asset('/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Selectize -->

        <link href="{{URL::asset('/libs/selectize/css/selectize.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body class="bg-primary bg-pattern">
        <div class="home-btn d-none d-sm-block">
            <a href="{{url('/')}}"><i class="mdi mdi-home-variant h2 text-white"></i></a>
        </div>

        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <a href="{{url('/')}}" class="logo"><img src="{{URL::asset('/images/logo-light.png')}}" height="24" alt="logo"></a>
                            <h5 class="font-size-16 text-white-50 mb-4">{{$title}}</h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">{{$title}}</h5>
                                    <form class="form-horizontal" action="{{url('register')}}" method="POST">
@csrf

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="text" class="form-control" id="username" name="name" required>
                                                    <label for="username">Username</label>
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="email" class="form-control" id="useremail" name="email" required>
                                                    <label for="useremail">Email</label> 
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="password" class="form-control" id="userpassword" name="password" required>
                                                    <label for="userpassword">Password</label>
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <select id="dept" name="deptid" class="form-control">
                                                    @foreach($department as $dept)
                                                    <option value="{{$dept->id}}">{{$dept->name}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
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
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="term-conditionCheck">
                                                    <label class="custom-control-label font-weight-normal" for="term-conditionCheck">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Register</button>
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <a href="{{url('login')}}" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Already have account?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="{{URL::asset('/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{URL::asset('/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{URL::asset('/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{URL::asset('/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{URL::asset('/libs/node-waves/waves.min.js')}}"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>


        <script src="{{URL::asset('/js/app.js')}}"></script>

        <!-- Selectize -->
        <script src="{{URL::asset('/libs/selectize/js/standalone/selectize.min.js')}}"></script>
        <script>

        var $deptauth = $(".selectize").selectize();
        var selectize = $deptauth[0].selectize;
    $(document).ready(function() {
        var deptid = document.getElementById('dept').value;
        $.ajax({
            url: "{{url('api/departments')}}"+"/"+deptid,
            method: "GET",
            success: function(result) {
                selectize.addItem(deptid);
                selectize.refreshOptions();
                selectize.$dropdown.hide();
            },
        });
    });

$('#dept').change(function() {
    var deptid = document.getElementById('dept').value;
    $.ajax({
        url: "{{url('api/departments')}}"+"/"+deptid,
        method: "GET",
        success: function(result) {
            selectize.clear();
            selectize.addItem(deptid);
            selectize.refreshOptions();
            selectize.$dropdown.hide();
        },
    });
});
</script>
    </body>
    </html>
