@section('header')
<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-right">
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{URL::asset('/images/users/avatar-1.jpg')}}" alt="Header Avatar">
                        <span class="d-none d-sm-inline-block ml-1">{{$auth->name}}</span>
                    </button>
                </div>
            </div>

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{url('/')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{URL::asset('/images/logo-sm-dark.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{URL::asset('/images/logo-dark.png')}}" alt="" height="20">
                    </span>
                </a>

                <a href="{{url('/')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{URL::asset('/images/logo-sm-light.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{URL::asset('/images/logo-light.png')}}" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            @include('layouts.topnav')
        </div>
    </div>
</header>
@endsection
@yield('header')
