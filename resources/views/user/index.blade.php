<section class="hero-section gap" style="background-image: url(assets/img/background-1.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                <div class="restaurant">
                    <h1>A Special Coffea For You</h1>
                    <p>We Provide A Variety Of Unique And Best Coffes</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                <div class="img-restaurant">
                    <img alt="man" src="images/menu/bg.png" height="600" width="400">
                </div>
            </div>
        </div>
    </div>
</section>

<!--about us -->
<section class="your-favorite-food gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                <div><img src="images/menu/about.png" alt="" width="400"></div>
            </div>
            <div class="col-lg-6 offset-lg-1" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                <div class="food-content-section">
                    <h2>About Us</h2>
                    <p>Mon-Sun 10:00 - 00:00</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quaerat rem maiores quod
                        fugiat quidem. Optio, aperiam. Voluptas earum odio tenetur, sit reiciendis, cum, sed
                        necessitatibus eius expedita porro dignissimos?</p>
                    <div class="button-gap">
                        <a href="/about" class="button button-2 non">See All<i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- end about us -->

{{-- Special coffea --}}
<section class="works-section gap no-top" style="background-image: url(assets/img/background-1.png);">
    <div class="container">
        <div class="hading" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
            <h2>Our Special Coffea</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, ad amet? Reiciendis facere quae,
                nulla ex soluta adipisci non deleniti commodi aliquam magnam similique recusandae ullam, ipsam
                laboriosam veniam! Neque?</p>
        </div>
        <div class="row ">
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="200" data-aos-duration="300">
                <div class="work-card">
                    <img alt="img" src="images/menu/dalgona.jpg" width="200">
                    <h4> Dalgona COffea</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, perferendis facere fuga repellat
                        nam maiores asperiores ea, corporis aliquid voluptatum provident reprehenderit commodi, a iusto.
                        Cupiditate quos velit et numquam.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="300" data-aos-duration="400">
                <div class="work-card">
                    <img alt="img" src="images/menu/caramel.jpg" width="200">
                    <h4>Caramel Macchiato</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quam facilis itaque
                        obcaecati, nam magnam dolor dolores commodi consectetur nulla sit aut, atque velit maiores,
                        dignissimos tenetur veritatis nisi illum.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="400" data-aos-duration="500">
                <div class="work-card">
                    <img alt="img" src="images/menu/matcha.jpg" width="200">
                    <h4>Matcha</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum totam qui laboriosam aspernatur
                        odit nisi quo hic omnis tenetur optio nobis, obcaecati dicta voluptates? Inventore dolore
                        explicabo earum iste dicta.</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{--  end Special coffea --}}

<!-- menu -->
<section class="best-restaurants gap" style="background:#fcfcfc">
    <div class="container">
        <div class="">
            <center>
                <h2><b>Menu</b></h2>
            </center>
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
        <div class="button-gap">
            <a href="/menu" class="button button-2 non">See All<i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>
<!-- end menu -->

{{-- contact --}}
<section class="reviews-sections gap" style="background-image: url(assets/img/background-1.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                <div class="reviews-content">
                    <h2 class="pb-3">Contact Us</h2>
                    <div class="d-flex  py-3">
                        <a href=""> <img src="images/menu/wa.png" alt="" height="55"
                                style="ps-3"></a>
                        <p class="ps-3 pt-2">082912902</p>
                    </div>
                    <div class="d-flex pb-3">
                        <a href="https://web.facebook.com/?locale=id_ID&_rdc=1&_rdr"><img
                                src="images/menu/facebook.png" alt="" height="55"></a>
                        <p class="ps-3 pt-2">caferegi</p>
                    </div>
                    <div class="d-flex pb-3">
                        <a href="https://www.instagram.com/"><img src="images/menu/ig.png" alt=""
                                height="50"></a>
                        <p class="ps-3 pt-2"> caferegi</p>
                    </div>
                    <div class="d-flex">
                        <img src="images/menu/lokasi.png" alt="" height="55">
                        <p class="ps-3 pt-2">PerintisKemerdekaan</p>
                    </div>




                </div>
            </div>
            <div class="col-xl-6 col-lg-12" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                <div class="reviews-img">
                    <img alt="photo" src="https://via.placeholder.com/676x585">
                    <i class="fa-regular fa-thumbs-up"></i>
                </div>
            </div>
        </div>
    </div>



</section>
{{-- end contact --}}
