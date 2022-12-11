@extends('Admin.dashboard')
@section('content')
    <div class="card p-3" style="margin-top: 10px">
        <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
