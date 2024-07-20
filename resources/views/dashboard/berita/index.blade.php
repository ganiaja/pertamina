@include('dashboard.layout.header')

<div class="container-fluid" id="admin">
    <a href="{{ url('berita/create') }}" class="btn btn-primary my-4">Buat Berita</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $index => $data)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $data->judul }}</td>
                        <td>
                            <a href="{{ url('berita/show/'. $data->id) }}" class="btn btn-primary">Detail</a>
                            <a href="{{ url('berita/edit/'. $data->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('berita/delete/'. $data->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('dashboard.layout.footer')