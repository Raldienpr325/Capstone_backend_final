@extends('Admin.dashboard')
@section('content')
    <div class="card">
        <div class="content">
            <div class="card-body">
                <a href="{{ route('sub-materi-admin.create') }}" class="btn btn-success mb-3 ">add data</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>#</td>
                            <th>Parent Materi</th>
                            <th>Nama Materi</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->materi_id }}</td>
                                <td>{{ $item->Nama_sub_materi }}</td>
                                <td>
                                    <a href="" class="btn btn-primary">Detail</a>
                                    <a href="" class="btn btn-secondary">Edit</a>
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
