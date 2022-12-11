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
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/curriculum.css') }}">



    <title>AJARI</title>
</head>

<body>
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
    <main>
        <div class="curriculum-hero">
            <h1>Kurikulum AJARI</h1>
            <p>Kami menfasilitasi anak-anak disabiltas sensorik dengan menyediakan kurikulum pembelajaran yang mereka
                butuhkan. Kurikulum yang kami sediakan mengacu pada kurikulum 2013 dengan menyeseuaikan kebutuhan
                masing-masing siswa.</p>
        </div>
        <div class="timeline-section">
            <div class="timeline-items">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">Kategori 1</div>
                    <div class="timeline-content">
                        <h3>Capaian Pembelajaran Siswa</h3>
                        <p>Siswa diharapakan mampu untuk mengembangkan kompetensi sikap, kompetensi pengetahuan, serta
                            kompetensi
                            keterampilan sebagai dasar dan penguatan kemampuan dalam kehidupan
                            bermasyarakat, berbangsa, dan bernegara yang muatan dan acuannya dikembangkan oleh pusat</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">Kategori 2</div>
                    <div class="timeline-content">
                        <h3>Capaian Pembelajaran Siswa</h3>
                        <p>Siswa diharapkan mampu untuk mengembangkan kompetensi sikap, kompetensi pengetahuan, dan
                            kompetensi keterampilan
                            peserta didik terkait lingkungan dalam bidang sosial, budaya, dan seni yang muatan dan
                            acuannya dikembangkan oleh pusat dan dapat dilengkapi dengan muatan lokal.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">Kategori 3</div>
                    <div class="timeline-content">
                        <h3>Capaian Pembelajaran Siswa</h3>
                        <p>Siswa diharapkan memenuhi semua capaian pembelajaran sesuai dengan kebutuhan khusus yang
                            diberikan kepada peserta didik.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-desc">
            <h3>Keterbatasan Bukan Suatu Halangan Untuk Belajar</h3>
            @if (Auth::user())
                <a href="{{ route('dashboard', 1) }}">
                    <button>Mulai Belajar</button>
                </a>
            @else
                <a href="{{ route('login-user') }}">
                    <button>Mulai Belajar</button>
                </a>
            @endif

        </div>
        <div class="bottom-content">
            @foreach ($data as $key => $value)
                <h2>Tertarik ? Ayo Belajar !</h2>
                <div class="classList">
                    <div class="classListCard">
                        <div class="classCardTop">
                            <div class="classImage">
                                <img src="{{ asset('img/kids-02.jpg') }}" alt="">
                            </div>
                            <div class="classDetail">
                                @if (Auth::user())
                                    <a href="{{ route('detail-kelas', $key) }}">
                                        {{ $value[0]->materi->Nama_materi }}</a>
                                @else
                                    <a href="{{ route('login-user') }}">{{ $value[0]->materi->Nama_materi }}</a>
                                @endif
                                <div class="Category">
                                    <div class="category-name">Kategori :</div>
                                    <div class="categoryList">
                                        @foreach ($value as $item)
                                            <div class="categoryItem">{{ $item->kategori->name }}</div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="classInfo">Kelas : {{ $value[0]->materi->kelas }}</div>
                            </div>
                        </div>
                        <div class="classDesc">
                            {{ @$value[0]->materi->deskripsi }}
                        </div>
                    </div>
            @endforeach

        </div>
        </div>
    </main>
    <footer>
        Ajari Team &copy; 2022
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/wrapper.js') }}"></script>
</body>

</html>
