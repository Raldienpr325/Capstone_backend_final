@extends('maindetail')

@section('content')
    <div class="head">
        @foreach ($data as $item)
            <a href="{{ route('dashboard', 1) }}" class="back">
                <div class="back-icon">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div class="back-title" id="title-arrow">{{ $item->Nama_materi }}</div>
            </a>
            <div class="hamburger-menu" tabindex="0">
                <i class="fa-solid fa-bars"></i>
            </div>
    </div>
    <div class="url">
        <div class="url-link">academies / Kelas 1 / <span><a href="">{{ $item->Nama_materi }}</a></span>
        </div>
    </div>
    @endforeach
    <div class="courseCard open">
        <button class="responsive-toggle">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
        <div class="sidebar open">
            <div class="sidebar-title">
                <h2>Daftar Modul</h2>
                <button class="toggle">
                    <i class="fa-solid fa-circle-chevron-left"></i>
                </button>
            </div>
            <div class="course-list">
                @if (count($sub) >= 1)
                    @foreach ($sub as $item)
                        <a class="cList" href="{{ route('subMateri', $item->id) }}">
                            <i class="fa fa-map-pin"></i>
                            <div class="courseName">{{ $item->Nama_sub_materi }}</div>
                        </a>
                    @endforeach
                @else
                    <a class="cList" href="">
                        <div class="courseName">Sub materi belum tersedia :D</div>
                    </a>
                @endif
            </div>
        </div>
        <div class="course">
            <h1>Pendahuluan</h1>
            @foreach ($data as $item)
                <div class="course-content">
                    <div class="course-video">
                        <iframe width="560" height="315" src="{{ $item->link_youtube }}"
                            title="YouTube
                        video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <button class="course-text" tabindex="0">
                    {{ $item->paragraf_1 }}
                </button>
                <button class="course-text" tabindex="0">
                    {{ $item->paragraf_2 }}
                </button>
                <button class="course-text" tabindex="0">
                    {{ $item->paragraf_3 }}
                </button>
                <button class="course-text" tabindex="0">
                    {{ $item->paragraf_4 }}
                </button>
                <button class="course-text" tabindex="0">
                    {{ $item->paragraf_5 }}
                </button>
            @endforeach

            <div class="course-button">
                <button class="previous">Sebelumnya</button>
                <button class="next">Selanjutnya</button>
            </div>
        </div>
    </div>
    <div class="popup-box">
        <div class="popup-content">
            <div class="popup-header">
                <h3></h3>
                <button class="popup-close-icon">
                    <span>&times;</span>
                </button>
            </div>
            <div class="popup-body">

            </div>
            <div class="popup-footer">
                <button class="btn popup-close-btn">Close</button>
            </div>
        </div>
    </div>



@endsection
