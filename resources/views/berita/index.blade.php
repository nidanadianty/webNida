<x-header />

<div class="container">
  <h2>Profil Sekolah</h2>
  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div> @endif

  <p><strong>Judul:</strong><br>{{ $berita->judul?? '_' }}</p>
  <p><strong>Gambar:</strong><br>{{ $berita->gambar?? '_' }}</p>
  <p><strong>Isi:</strong><br>{{ $berita->isi?? '_' }}</p>

  <a href="" class="btn btn-primary"></a>
</div> 
