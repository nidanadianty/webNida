<x-header />
  <section class="container">
  <div class="card text-center bg-success-subtle my-4">
    <h2>Ekstrakulikuler</h2>
    <p>Sekolah kami memiliki beberapa Ekstrakulikuler yang tersedia</p>
  </div>
  <div class="row justify-content-evenly">

    <!-- English Club -->
    @foreach ( $ekstrakulikulers as $item )
      
    
    <div class="col-lg-6 mb-3">
      <div class="card shadow-sm text-center border-light h-100">
        <img
          src={{ $item->gambar }}
          class="card-img-top rounded-circle w-25 mx-auto py-3"
          alt="English Club"
        />
        <div class="card-body">
          <h5 class="card-title fw-bold">{{ $item->judul }}</h5>
          <p class="card-text">
           {{ $item->deskripsi }}
          </p>
        </div>
      </div>
    </div>
    @endforeach


    
    
  </div>
</section>

<x-footer /> 
               
  </body>
</html>
