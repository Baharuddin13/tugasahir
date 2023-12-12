<section class="best-restaurants gap" style="background:#fcfcfc">
    <div class="container">
        <div class="">
            
                <h2 class="text-center"><b>Menu</b></h2>
            
        </div>
        <div class="row">
            @foreach ($menus as $menu)
                <div class="col-lg-6" data-aos="flip-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="logos-card">
                        <img alt="logo" src="{{ asset('images/menu/' . $menu->gambar) }}" width="80">
                        <div class="cafa">
                            <h4><a href="restaurant-card.html">{{ $menu->namamenu }}</a></h4>
                            <p>{{ $menu->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        
    </div>
</section>
<!-- end menu -->