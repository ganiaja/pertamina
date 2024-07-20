@include('dashboard.layout.header')

<div class="container-fluid my-4">
    <div class="card">
        <div class="card-body">
            <form action="{{ url('berita/update/'. $berita->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control" value="{{ $berita->judul }}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="" class="form-label">Konten</label>
                        <textarea name="isi" id="isi" rows="10" class="form-control">{{ $berita->isi }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@include('dashboard.layout.footer')