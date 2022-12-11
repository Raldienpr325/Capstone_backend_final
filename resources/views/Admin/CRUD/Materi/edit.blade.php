@extends('Admin.dashboard')
@section('content')
    <div class="card p-3" style="margin-top: 10px">
        <form action="{{ route('materi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" aria-describedby="emailHelp" name="kelas">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select name="kategori[]" id="kategori" class="form-select" multiple="multiple">
                    @foreach ($data as $item)
                        <option value="{{ @$item->id }}">{{ @$item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Link Pembelajaran ( Youtube )</label>
                <input type="text" class="form-control" id="kelas" aria-describedby="emailHelp" name="link_youtube">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="Nama_materi" class="form-label">Nama Materi</label>
                <input type="text" class="form-control" id="Nama_materi" aria-describedby="emailHelp" name="Nama_materi">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="paragraf_1" class="form-label">Paragraf 1</label>
                <input type="text" class="form-control" id="paragraf_1" aria-describedby="emailHelp" name="paragraf_1"
                    required>
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="paragraf_2" class="form-label">Paragraf 2 (Jika ada)</label>
                <input type="text" class="form-control" id="paragraf_2" aria-describedby="emailHelp" name="paragraf_2">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="paragraf_3" class="form-label">Paragraf 3 (Jika ada)</label>
                <input type="text" class="form-control" id="paragraf_3" aria-describedby="emailHelp" name="paragraf_3">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="paragraf_4" class="form-label">Paragraf 4 (Jika ada)</label>
                <input type="text" class="form-control" id="paragraf_4" aria-describedby="emailHelp" name="paragraf_4">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="paragraf_5" class="form-label">Paragraf 5 (Jika ada)</label>
                <input type="text" class="form-control" id="paragraf_5" aria-describedby="emailHelp" name="paragraf_5">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
@include('select2.setup')
@push('js')
    <script>
        $(document).ready(function() {
            $(function() {
                $('#kategori').select2({
                    width: '100%',
                    multiple: true,
                    tags: true
                });
            });
        });
    </script>
@endpush
