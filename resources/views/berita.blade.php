<x-header />

        <!-- SECTION BERITA -->
         <div class="container">
             <div class="row my-5">
                <div class="col-lg-12 text-center">
                    <div class="card text-center bg-primary text-white ">
                    <h2>Berita</h2>
                    </div>
                </div>
            </div>
        
            <div class="row">
                @foreach ($berita as $item)
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <img width="100%" src={{ $item->gambar }} alt="">
                        </div>
                        <div class="card-body">
                            <h3 class="text-start">{{ $item->judul }}</h3>
                            <a class="btn btn-primary" href={{ $item->link }}>Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            
            </div>
            </div>
            <!-- TUTUP SECTION BERITA -->
<x-footer/>
               
  </body>
</html>