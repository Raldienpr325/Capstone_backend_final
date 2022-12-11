<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="dicoding:email" content="mhusein463@gmail.com">
    <meta name="description" content="AJARI : Platform Pembelajaran Anak Disabilitas Sensorik">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    @stack('css')

    <title>Dashboard</title>
</head>

<body>
    <a class="skip-to-main" tabindex="0" href="#mainContent">Skip to main content</a>
    <header>
        <div class="logo-name">
            <i class="fa fa-book-open-reader"></i>
            <a href="">AJARI</a>
        </div>
        <div class="after-login">
            <div class="navProfile">
                <div class="get-started">
                    <button class="profile" tabindex="0">
                        <i class="fa-solid fa-chevron-down"></i>
                        <i class="fa-solid fa-circle-user"></i>
                    </button>
                    <div class="selectMenu">
                        <ul>
                            <li class="option"><a href="{{ route('dashboard', 1) }}"><i
                                        class="fa-solid fa-chalkboard-user"></i>
                                    Dashboard</a></li>
                            <li class="option">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    <button>
                                        <i class="fa-solid fa-sign-out"></i> Logout
                                    </button>
                                </form>

                            </li>
                        </ul>
                    </div>
                </div>
                <button class="bars-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="/"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-graduation-cap"></i> Curriculum</a>
                    </li>
                    <li><a href="{{ route('class') }}"><i class="fa-solid fa-school"></i> Classes</a></li>
                    <li><a href="{{ route('about-us') }}"><i class="fa-solid fa-address-card"></i> About us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main tabindex="0" id="mainContent">
        @yield('content')
    </main>
    <footer>
        Ajari Team &copy; 2022
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/wrapper.js') }}"></script>
    @stack('js')
</body>

</html>
