<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto nav-item dropdown mr-5">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown mr-5">
            <a class="nav-link dropdown-toggle mr-5" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user nav-icon"> {{ Auth::user()->name }}</i>
            </a>
            <ul class="dropdown-menu mr-5" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item " href="#">Profile</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>


    </ul>
</nav>
