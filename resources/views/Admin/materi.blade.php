@extends('Admin.dashboard')
@section('content')
    <div class="card">
        <div class="content">
            <div class="card-body">
                <a href="{{ route('materi.create') }}" class="btn btn-success mb-3 ">add data</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Kelas </th>
                            <th>Nama Materi</th>
                            <th>deskripsi</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->Nama_materi }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>
                                    <div class="row" style="margin-left: 0">
                                        <form action="{{ route('materi.destroy', $item->id) }}" method="POST"
                                            style="width:50%">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger"
                                                style="background-color: red; color:white;font-weight:6 00;font-size:12px"
                                                type="submit">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                            </button>
                                        </form>
                                        <button class=" btn btn-success"
                                            style="color:white;font-weight:600;font-size:12px;width:40%">
                                            <i class="fas fa-pen"></i>
                                            <a href="{{ route('materi.edit', $item->id) }}"
                                                style="color: aliceblue;text-decoration:none">Edit</a>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>


                </table>
            </div>
            {{-- <div class="card-footer">{{ $dtlayanan->links() }}</div> --}}
        </div>
    </div>
@endsection
