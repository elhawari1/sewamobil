<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                @if (Session::has('nama'))
                    Selamat Datang, {{ Session::get('nama') }}
                @else
                    Selamat Datang
                @endif
            </a>
            <ul class="dropdown-menu">
                <li class="nav-item">
                    <a href="/logout" class="dropdown-item dropdown-footer">
                        <i class="fa-solid fa-right-from-bracket mr-2"></i>Logout
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
