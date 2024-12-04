<div class="head">
    <!-- head top -->
    <div class="top">
        <div class="left">
            <button id="on" class="btn btn-info"><i class="fa fa-bars"></i></button>
            <button id="off" class="btn btn-info hide"><i class="fa fa-align-left"></i></button>
            <button class="btn btn-info hidden-xs-down"><i class="fa fa-expand-arrows-alt"></i></button>
            <button class="btn btn-info hidden-xs-down"><i class="fa fa-home"></i>Back Home</button>
        </div>
        <div class="right">
            <button class="btn btn-info hidden-xs-down"><i class="fa fa-bell"></i></button>
            <button class="btn btn-info hidden-xs-down"><i class="fa fa-envelope"></i></button>
            <div class="dropdown">
                <button class="btn btn-info dropdown-toggle" id="userDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">{{Auth::guard('admin')->user()->firstname}}</button>
                <div class="dropdown-menu" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{route('admins.show' ,Auth::guard('admin')->user()->id)}}">profile</a>
                    <a class="dropdown-item" href="#">sitting</a>
                    <form action="{{ route('logout') }}" method="post">
                      @csrf
                        <button class="dropdown-item" type="submit">log out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end head top -->
    <!-- start head bottom -->
    <div class="bottom">
        <div class="left">
            <h1>@yield('header')</h1>
        </div>
        <div class="right">
            <h1>dashboard /</h1>
            <a href="#">@yield('breadcrump')</a>
        </div>
    </div>
    <!-- end head bottom -->
</div>
