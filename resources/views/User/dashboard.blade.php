@extends('authenticated')
@section('content')
    <div class="dashboard-container">
        <div class="widget">
            <h1>Hello, {{ Auth::user()->name }}</h1>
            <p>Selamat belajar, kami menyediakan beberapa kelas dan materi pembelajaran yang bisa anda pilih dibawah
                ini.</p>
            <button>
                Mulai Belajar
                <div class="widget-icon">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </button>
        </div>
        <div class="classCard">
            <div class="class">
                <a href="{{ route('dashboard', 1) }}">Kelas 1</a>

                <a href="{{ route('dashboard', 2) }}">Kelas 2</a>

                <a href="{{ route('dashboard', 3) }}">Kelas 3</a>

                <a href="{{ route('dashboard', 4) }}">Kelas 4</a>

                <a href="{{ route('dashboard', 5) }}">Kelas 5</a>

                <a href="{{ route('dashboard', 6) }}">Kelas 6</a>
            </div>
        </div>
        <div class="classList">
            @if (count($data) >= 1)
                @foreach ($data as $key => $value)
                    <div class="classListCard">
                        <div class="classCardTop">
                            <div class="classImage">
                                <img src="{{ asset('img/kids-02.jpg') }}" alt="">
                            </div>
                            <div class="classDetail">
                                <a href="{{ route('detail-kelas', $key) }}">{{ $value[0]->materi->Nama_materi }}</a>
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
            @else
                <center>
                    <p class="mt-5">Belum ada materi pada kelas ini.</p>
                </center>
            @endif


        </div>
    </div>
@endsection
