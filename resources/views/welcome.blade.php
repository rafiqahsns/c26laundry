@extends('layouts.navbar')

<header class="masthead text-center d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
              <strong>Lacak Order Laundry</strong>
            </h1>
                <hr>
            </div>
            <div class="col-lg-9 mx-auto">
                <div class="wrap">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder=" Masukkan nomor order ">
                        <button style="padding: 0px;" type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">Kami siap melayani Anda!</h2>
                <hr class="light my-4">
                <p class="text-faded mb-4">C26 Laundry hadir dengan konsep Modernist Laundry (Proses) dan kesan Industrialis (Store) dan seterusnya..</p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="{{ route('layanan') }}">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Mengapa C26 Laundry?</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="/img/dailyservice.png">
                    <h3 class="mb-3">Daily Service</h3>
                    <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="/img/dryclean.png">
                    <h3 class="mb-3">Modern</h3>
                    <p class="text-muted mb-0">Sistem order laundry berbasis online dan offline, semua terakses media sosial.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="/img/satuan.png">
                    <h3 class="mb-3">Satuan</h3>
                    <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="/img/membership.png">
                    <h3 class="mb-3">Membership</h3>
                    <p class="text-muted mb-0">Dapatkan diskon khusus untuk member C26 Laundry!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark text-white">
    <div class="container text-center">
        <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
        <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
    </div>
</section>

@extends('layouts.footer')