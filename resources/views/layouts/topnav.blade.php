@section('topnav')
<div class="topnav">
    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
        <div class="collapse navbar-collapse" id="topnav-menu-content">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('dashboard')}}">
                        Dashboard
                    </a>
                </li>
            </ul>
            @if($auth->groupid == 1)
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('muser')}}">
                        Manajemen User 
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('pthread')}}">
                        Thread 
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('pdepartment')}}">
                        Department
                    </a>
                </li>
            </ul>
            @else
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('pthread')}}">
                        Thread 
                    </a>
                </li>
            </ul>
            @endif
        </div>
    </nav>
</div>
@endsection
@yield('topnav')
