@extends('layouts.main')

@section('jumbotron-home')
    <div class="container-fluid header">
        <div class="container jumbotron-headline">
            <h1>Explore</h1>
            <h2>Your Amazing City Tour Together</h2>
        </div>
        <div class="container jumbotron-searchbar">
            <p>Find great places to holliday</p>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-describedby="button-addon2" />
                <button class="btn btn-outline-secondary btn-search" type="button" id="button-addon2">
                    Search
                </button>
            </div>
        </div>
    </div>
@endsection

@section('container')
    <div class="container feature">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="frontend/images/logo-guarantee.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Best Price Guarantee</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="frontend/images/logo-heart.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Travellers Love Us</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="frontend/images/logo-agent.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Best Travel Agent</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="frontend/images/logo-support.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Our Dedicated Support</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container paket">
        <h2>Paket Tour</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <a href="produk.html">
                    <div class="card h-100 paket-card">
                        <img src="frontend/images/labuan-bajo1.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">5D Amazing Labuan Bajo</h5>
                            <h6 class="card-text">IDR. 750,000.00</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="produk.html">
                    <div class="card h-100 paket-card">
                        <img src="frontend/images/labuan-bajo1.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">5D Amazing Labuan Bajo</h5>
                            <h6 class="card-text">IDR. 750,000.00</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="produk.html">
                    <div class="card h-100 paket-card">
                        <img src="frontend/images/labuan-bajo1.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">5D Amazing Labuan Bajo</h5>
                            <h6 class="card-text">IDR. 750,000.00</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="produk.html">
                    <div class="card h-100 paket-card">
                        <img src="frontend/images/labuan-bajo1.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">5D Amazing Labuan Bajo</h5>
                            <h6 class="card-text">IDR. 750,000.00</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
