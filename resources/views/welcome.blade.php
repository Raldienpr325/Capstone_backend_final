@extends('maintemplate')

@section('content')
    <section>
        <div class="banner-desc">
            <div class="motto">A Place Every Disabled Students Should Be.</div>
            <div class="desc">Education is smart enough to change the human mind positively!</div>
            @if (Auth::user())
                <a href="{{ route('dashboard', 1) }}">
                    <button>
                        <div class="started">
                            Get Started
                        </div>
                        <div class="button-icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </button>
                </a>
            @else
                <a href="{{ route('login-user') }}">
                    <button>
                        <div class="started">
                            Get Started
                        </div>
                        <div class="button-icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </button>
                </a>
            @endif

        </div>
        <div class="banner-img">
            <div class="image">
                <img src="{{ asset('img/banner-img.jpg') }}" alt="Banner Image">
            </div>
        </div>
    </section>
    <div class="gradient"></div>
    <div class="container">
        <div class="about-us">
            <div class="left" data-aos="fade-right" data-aos-duration="1000">
                <h2>About us</h2>
                <h1>Ajari</h1>
                <p>AJARI merupakan platform pembelajaran untuk anak disabilitas yang dirancang khusus untuk memfasilitasi
                    anak-anak disabilitas sensorik. AJARI memiliki kurikulum yang telah disesuaikan dengan kebutuhan
                    masing-masing siswa, sesuai dengan kebutuhan yang mereka butuhkan. AJARI ini juga memiliki fitur kelas
                    yang dapat digunakan untuk membantu mereka dalam memahami serta menguasai materi yang dipelajari.</p>
            </div>
            <div class="right" data-aos="fade-in" data-aos-delay="400" data-aos-duration="1000">
                <img src="{{ asset('img/about-us.png') }}" alt="About Us">
            </div>
        </div>
        <div class="curriculum">
            <div class="left" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">
                <div class="card">
                    <div class="card-icon first">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <div class="card-desc">Reading</div>
                </div>
                <div class="card">
                    <div class="card-icon second">
                        <i class="fa-solid fa-square-pen"></i>
                    </div>
                    <div class="card-desc">Writing</div>
                </div>
                <div class="card">
                    <div class="card-icon third">
                        <i class="fa-solid fa-face-laugh-wink"></i>
                    </div>
                    <div class="card-desc">Social Emotional</div>
                </div>
                <div class="card">
                    <div class="card-icon fourth">
                        <i class="fa-sharp fa-solid fa-moon"></i>
                    </div>
                    <div class="card-desc">Numeracy</div>
                </div>
            </div>
            <div class="right" data-aos="fade-left data-aos-duration="1000">
                <h2>Curriculum</h2>
                <h1>Our Curriculum</h1>
                <p>Kami menfasilitasi anak-anak disabiltas sensorik dengan menyediakan kurikulum pembelajaran yang mereka
                    butuhkan. Kurikulum yang kami sediakan mengacu pada kurikulum 2013 dengan menyeseuaikan kebutuhan
                    masing-masing siswa. </p>
                <div class="note">AJARI menggunakan acuan pada kurikulum 2013 dengan sedikit memodifikasi materi
                    pembelajaran sesuai dengan kebutuhan siswa.</div>
                <a href="{{ route('curriculum') }}">Know Us</a>
            </div>
        </div>
        <div class="gallery">
            <div class="left" data-aos="fade-right" data-aos-duration="1000">
                <h2>Gallery</h2>
                <h1>Our Photo Gallery</h1>
                <p>Cuplikan foto dari proses pembelajaran dapat dilihat melalui gambar yang sudah tertera. Selama proses
                    pembelajaran, siswa akan didampingi oleh mentor
                    agar proses pembelajaran bisa dilakukan secara maksimal melalui classroom.
                </p>
                <p>Dengan hal tersebut dilakukan agar siswa bisa mengikuti proses pembelajaran tanpa mengalami kesulitan
                    sedikitpun.</p>
            </div>
            <div class="right">
                <div class="gallery-image" data-aos="flip-left" data-aos-delay="400" data-aos-duration="1000">
                    <img src="{{ asset('img/gallery-01.jpg') }}" alt="Gallery">
                </div>
                <div class="gallery-image" data-aos="flip-right" data-aos-delay="700" data-aos-duration="1000">
                    <img src="{{ asset('img/gallery-02.jpg') }}" alt="Gallery">
                </div>
            </div>
        </div>
        <div class="mission">
            <div class="mission-card" data-aos="zoom-in" data-aos-duration="1000">
                <i class="fa-solid fa-chalkboard-user"></i>
                <h2>Our Programs</h2>
                <div class="mission-desc">
                    <div class="mission-list">
                        <p>Play2.5-</p>
                        <p>4 years</p>
                    </div>
                    <div class="mission-list">
                        <p>Pre-K</p>
                        <p>4-5 years</p>
                    </div>
                    <div class="mission-list">
                        <p>K</p>
                        <p>5-6 years</p>
                    </div>
                    <div class="mission-list">
                        <p>STD I-V</p>
                        <p>Processing</p>
                    </div>
                </div>
            </div>
            <div class="mission-card" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000">
                <i class="fa fa-lightbulb"></i>
                <h2>Our Mission</h2>
                <div class="mission-desc">
                    Misi kami yaitu untuk menciptakan generasi muda yang mempunyai kemampuan berpikir kritis, inovatif dan
                    kreatif.
                    Hal tersebut kami lakukan dengan menyediakan kurikulum yang menyesuaikan kebutuhan siswa.
                </div>
            </div>
            <div class="mission-card" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="1000">
                <i class="fa-solid fa-school"></i>
                <h2>Our Classroom</h2>
                <div class="mission-desc">
                    <div class="mission-list">
                        <p>Play2.5-</p>
                        <p>4 years</p>
                    </div>
                    <div class="mission-list">
                        <p>Pre-K</p>
                        <p>4-5 years</p>
                    </div>
                    <div class="mission-list">
                        <p>K</p>
                        <p>5-6 years</p>
                    </div>
                    <div class="mission-list">
                        <p>STD I-V</p>
                        <p>Processing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
