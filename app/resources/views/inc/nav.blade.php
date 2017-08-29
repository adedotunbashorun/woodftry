<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{ url('/dashboard') }}">THE WOOD FACTORY LTD</a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Quicklink Menus <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/view-item') }}"><i class="material-icons">local_mall</i>Manage Goods</a></li>
                            <li><a href="{{ url('/view-design') }}"><i class="material-icons">brush</i>Manage Designs</a></li>
                            <li><a href="{{ url('/semi-finished-1') }}"><i class="material-icons">account_balance</i>Semi-Finished 1</a></li>
                            <li><a href="{{ url('/semi-finished-2') }}"><i class="material-icons">account_balance</i>Semi-Finished 2</a></li>
                            <li><a href="{{ url('/stock') }}"><i class="material-icons">storage</i>Finished Warehouse</a></li>
                            <li><a href="{{ url('/search') }}"><i class="material-icons">search</i>search</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Welcome, {{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"> Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>