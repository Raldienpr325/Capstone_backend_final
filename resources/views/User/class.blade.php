@extends('maintemplate')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-classes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive-class.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/curriculum.css') }}">
@endpush

@section('content')
    <div class="curriculum-hero">
        <h1>Kelas AJARI</h1>
        <p>Kami menyediakan kelas kelas yang dikhususkan untuk anak anak penyandang disabilitas sensorik dengan menerapkan
            beberapa fitur yang dapat menjadi sarana bantuan bagi pengguna.</p>
    </div>
    <div class="course-list">
        <div class="course-item">
            <div class="course-img">
                <img src="https://cdn-icons-png.flaticon.com/512/2436/2436636.png" alt="">
            </div>
            <div class="course-description">
                <h2><a href="">Membaca</a></h2>
                <p>Membaca merupakan kegiatan melihat tulisan bacaan dan proses memahami isi teks dengan bersuara atau dalam
                    hati.</p>
            </div>
        </div>
        <div class="course-item">
            <div class="course-img">
                <img src="https://cdn-icons-png.flaticon.com/512/3131/3131607.png" alt="">
            </div>
            <div class="course-description">
                <h2><a href="">Menulis</a></h2>
                <p>Menulis adalah suatu kegiatan untuk menciptakan suatu catatan atau informasi pada suatu media dengan
                    menggunakan aksara.</p>
            </div>
        </div>
        <div class="course-item">
            <div class="course-img">
                <img src="https://cdn-icons-png.flaticon.com/512/4999/4999880.png" alt="">
            </div>
            <div class="course-description">
                <h2><a href="">Menghitung</a></h2>
                <p>Penghitungan adalah proses yang disengaja untuk mengubah satu masukan atau lebih ke dalam hasil tertentu,
                    dengan sejumlah peubah.</p>
            </div>
        </div>
    </div>
    <div class="course-detail-list">
        <div class="course-detail-item details">
            <h2>All AJARI COURSE</h2>
            <div class="course-detail-item-img">
                <img src="https://cdn-icons-png.flaticon.com/512/1164/1164651.png" alt="book">
                <h3>3 kelas</h3>
            </div>

            <p>Terdapat 3 kelas utama pada AJARI, yaitu kelas belajar membaca, belajar menulis, dan belajar menghitung.</p>
        </div>
        <div class="course-detail-item">
            <img src="https://cdn-icons-png.flaticon.com/512/2436/2436636.png" alt="Indonesia">
            <h2>Membaca</h2>
        </div>
        <div class="course-detail-item">
            <img src="https://cdn-icons-png.flaticon.com/512/3131/3131607.png" alt="English">
            <h2>Menulis</h2>
        </div>
    </div>

    <div class="testi-list">
        <h1>Testimoni Pengguna</h1>
        <div class="testi-item">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="profile">
            <div class="rating"></div>
            <p>Memudahkan saya dalam belajar hitung-menghitung</p>
        </div>
        <div class="testi-item">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="profile">
            <div class="rating"></div>
            <p>Kelas yang disediakan berkualitas dan bermanfaat</p>
        </div>
        <div class="testi-item">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="profile">
            <div class="rating"></div>
            <p>Materi yang disampaikan sangat jelas dan terstruktur</p>
        </div>
        <div class="testi-item">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="profile">
            <div class="rating"></div>
            <p>Berkat ajari, saya mendapat nilai bagus di sekolah</p>
        </div>
        <div class="testi-item">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="profile">
            <div class="rating"></div>
            <p>Sangat mudah untuk digunakan dan dioperasikan</p>
        </div>
        <div class="testi-item">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="profile">
            <div class="rating"></div>
            <p>Belajar di sini sangat menyenangkan dan efektif</p>
        </div>
        <div class="testi-item">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="profile">
            <div class="rating"></div>
            <p>Pengalaman yang saya dapatkan sangat berharga</p>
        </div>
        <div class="testi-item">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt="profile">
            <div class="rating"></div>
            <p>Mentor-mentornya sangat baik dan menyenangkan</p>
        </div>
    </div>

    <div class="trust-list">
        <h1 class="trust-title">Trusted by</h1>
        <div class="trust-item"><img
                src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-google.png"
                alt="Google"></div>
        <div class="trust-item"><img
                src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-google.png"
                alt="Google"></div>
        <div class="trust-item"><img
                src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-google.png"
                alt="Google"></div>
        <div class="trust-item"><img
                src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-partner-google.png"
                alt="Google"></div>
    </div>
@endsection
