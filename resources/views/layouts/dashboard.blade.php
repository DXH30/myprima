<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::asset('/images/favicon.ico')}}">
        <!-- datepicker -->
        <link href="{{URL::asset('/libs/air-datepicker/css/datepicker.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="{{URL::asset('/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Summernote css -->
        <link href="{{URL::asset('/libs/summernote/summernote-bs4.css')}}" rel="stylesheet" type="text/css" />

        <!-- jvectormap -->
        <link href="{{URL::asset('/libs/jqvmap/jqvmap.min.css')}}" rel="stylesheet" />

        <!-- Bootstrap Css -->
        <link href="{{URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{URL::asset('/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{URL::asset('/css/app.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Selectize -->
        <link href="{{URL::asset('/libs/selectize/css/selectize.css')}}" rel="stylesheet" type="text/css" />


    </head>

    <body data-topbar="colored" data-layout="horizontal" data-layout-size="boxed">
        @yield('content');
    </body>
</html>
