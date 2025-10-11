<x-header />

         <!-- SECTION GALERI -->
          <div class="container">
             <div class="row my-5">
                <div class="col-lg-12 text-center">
                    <div class="card text-center bg-primary text-white">
                    <h2>Galeri</h2>
                    </div>
                    <div class="row my-4">
                        @foreach ($galeris as $item )
                            
                        
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <img width="100%" src={{ $item->gambar }} alt="">
                                </div>
                            </div>
                        </div>
                        @endforeach
             <!-- TUTUP SECTION GALERI -->

             
 <x-footer />               
  </body>
</html>