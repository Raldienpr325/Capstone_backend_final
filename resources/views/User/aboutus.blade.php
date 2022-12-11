<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="dicoding:email" content="mhusein463@gmail.com">
    <meta name="description" content="AJARI : Platform Pembelajaran Anak Disabilitas Sensorik">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/style-mentor-curriculum.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive-mentor-curriculum.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <title>AJARI</title>
</head>

<body>
    <a class="skip-to-main" tabindex="0" href="#mainContent">Skip to main content</a>
    <header>
        <div class="logo-name">
            <i class="fa fa-book-open-reader"></i>
            <a href="">AJARI</a>
        </div>
        @if (Auth::user())
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
                        <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-graduation-cap"></i>
                                Curriculum</a>
                        </li>
                        <li><a href="{{ route('class') }}"><i class="fa-solid fa-school"></i> Classes</a></li>
                        <li><a href="{{ route('about-us') }}"><i class="fa-solid fa-address-card"></i> About us</a></li>
                    </ul>
                </nav>
            </div>
        @else
            <div class="before-login">
                <button class="bars-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
                <nav class="nav">
                    <div class="get-started">
                        <div class="login">
                            <a href="{{ route('login-user') }}">Sign in &nbsp; <i
                                    class="fa-solid fa-arrow-right-to-bracket"></i></a>
                        </div>
                        <div class="register">
                            <a href="{{ route('sign-up') }}">Sign up</a>
                        </div>
                    </div>
                    <ul>
                        <li><a href="/"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="{{ route('curriculum') }}"><i class="fa-solid fa-graduation-cap"></i>
                                Curriculum</a>
                        </li>
                        <li><a href="{{ route('class') }}"><i class="fa-solid fa-school"></i> Classes</a></li>
                        <li><a href="{{ route('about-us') }}"><i class="fa-solid fa-address-card"></i> About us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        @endif
    </header>
    <main tabindex="0" id="mainContent">

        <div class="container">
            <div class="mentor-bar">
                <div class="left" data-aos="fade-in" data-aos-delay="400" data-aos-duration="1000">
                    <img src="{{ asset('img/mentor2.png') }}" alt="About Us">
                </div>
                <div class="right" data-aos="fade-right" data-aos-duration="1000">

                    <h1>MENTOR</h1>
                    <p>Mentor kami berasal dari software engineer yang sudah expert dibidangnya, sehingga tidak perlu
                        ragu lagi untuk kemampuan dari masing masing mentor kami. Bahkan ada beberapa yang sudah
                        memperolah google ethical hacking dan beberapa sertifikat yang berskala internasional.</p>
                </div>

            </div>
        </div>

        <div class="odd-mentor" data-aos="fade-in" data-aos-delay="400" data-aos-duration="1000">
            <h1>language mentor</h1>
            <div class="kelas">
                <div class="mentor-card">

                    <img src="{{ asset('img/mentor.png') }}" alt="anonim s.t m.ts">
                    <h3>anonim s.t m.ts</h3>
                    <p>indonesia mentor</p>
                    <button>learn now</button>
                </div>
                <div class="mentor-card">

                    <img src="{{ asset('img/mentor.png') }}" alt="anonim s.t m.ts">
                    <h3>anonim s.t m.ts</h3>
                    <p>indonesia mentor</p>
                    <button>learn now</button>
                </div>
                <div class="mentor-card">

                    <img src="{{ asset('img/mentor.png') }}" alt="anonim s.t m.ts">
                    <h3>anonim s.t m.ts</h3>
                    <p>indonesia mentor</p>
                    <button>learn now</button>
                </div>
                <div class="mentor-card">

                    <img src="{{ asset('img/mentor.png') }}" alt="anonim s.t m.ts">
                    <h3>anonim s.t m.ts</h3>
                    <p>indonesia mentor</p>
                    <button>learn now</button>
                </div>
            </div>
        </div>
        <div class="even-mentor" data-aos="fade-in" data-aos-delay="400" data-aos-duration="1000">
            <h1>math mentor</h1>
            <div class="kelas">
                <div class="mentor-card">

                    <img src="{{ asset('img/mentor.png') }}" alt="anonim s.t m.ts">
                    <h3>anonim s.t m.ts</h3>
                    <p>indonesia mentor</p>
                    <button>learn now</button>
                </div>
                <div class="mentor-card">

                    <img src="{{ asset('img/mentor.png') }}" alt="anonim s.t m.ts">
                    <h3>anonim s.t m.ts</h3>
                    <p>indonesia mentor</p>
                    <button>learn now</button>
                </div>
                <div class="mentor-card">

                    <img src="{{ asset('img/mentor.png') }}" alt="anonim s.t m.ts">
                    <h3>anonim s.t m.ts</h3>
                    <p>indonesia mentor</p>
                    <button>learn now</button>
                </div>
                <div class="mentor-card">

                    <img src="{{ asset('img/mentor.png') }}" alt="anonim s.t m.ts">
                    <h3>anonim s.t m.ts</h3>
                    <p>indonesia mentor</p>
                    <button>learn now</button>
                </div>
            </div>
        </div>

        <div class="odd-mentor" data-aos="fade-in" data-aos-delay="400" data-aos-duration="1000">
            <h1>science mentor</h1>
            <div class="kelas">
                <div class="mentor-card">

                    <img src="{{ asset('img/mentor.png') }}" alt="anonim s.t m.ts">
                    <h3>anonim s.t m.ts</h3>
                    <p>indonesia mentor</p>
                    <button>learn now</button>
                </div>
                <div class="mentor-card">

                    <img src="{{ asset('img/mentor.png') }}" alt="anonim s.t m.ts">
                    <h3>anonim s.t m.ts</h3>
                    <p>indonesia mentor</p>
                    <button>learn now</button>
                </div>
                <div class="mentor-card">

                    <img src="{{ asset('img/mentor.png') }}" alt="anonim s.t m.ts">
                    <h3>anonim s.t m.ts</h3>
                    <p>indonesia mentor</p>
                    <button>learn now</button>
                </div>
                <div class="mentor-card">

                    <img src="{{ asset('img/mentor.png') }}" alt="anonim s.t m.ts">
                    <h3>anonim s.t m.ts</h3>
                    <p>indonesia mentor</p>
                    <button>learn now</button>
                </div>
            </div>
        </div>
    </main>
    <footer>
        Ajari Team &copy; 2022
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/wrapper.js') }}"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
</body>

</html>
