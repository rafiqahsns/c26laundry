@extends('layouts.navbar')
<section id="about" class="headerbg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="text-uppercase  text-center"><strong>Membership</strong></h1>
                <h6 class="text-uppercase  text-center"><strong><a href="#tentang">Tentang Membership</a>  /  <a href="#paket">Paket</a>  /  <a href="#ceksaldo">Cek Saldo</a></strong></h6>
            </div>
        </div>
    </div>
</section>
<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6"> <img src="img/about.jpg" style="width:100%" class="img-responsive" alt=""> </div>
            <div class="col-xs-12 col-md-6">
                <div class="about-text text-white">
                    <h2 class="text-center">About Us</h2>
                    <hr class="light">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <h3>Keuntungan</h3>
                    <div class="list-style">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <ul>
                                <li>Lorem ipsum dolor</li>
                                <li>Tempor incididunt</li>
                                <li>Lorem ipsum dolor</li>
                                <li>Incididunt ut labore</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- pricing section -->
<section id="paket">
    <div class="container">
        <div class="row">
            <div class="mx-auto text-center">
                <h2 class="section-heading">Paket Membership</h2>
                <hr class="my-4">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <h4 class="card-header">Paket A</h4>
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <h4 class="card-header">Paket B</h4>
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <h4 class="card-header">Paket C</h4>
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" bg-dark" id="#ceksaldo">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">Cek Saldo</h2>
                <hr class="light my-4">
                <div class="search">
                    <input type="text" style="box-shadow:none;" class="searchTerm" placeholder=" Masukkan id member">
                    <button style="padding: 0px;" type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@extends('layouts.footer')