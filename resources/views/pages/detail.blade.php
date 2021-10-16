@extends('layouts.main')

@section('container')
    <div class="container halaman-produk">
        <div class="container produk-headline">
            <h1>5D Amazing Labuan Bajo</h1>
            <h2>Nusa Tenggara Timur</h2>
        </div>
        <div id="carouselExampleIndicators" class="container carousel slide gallery mr-auto" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="frontend/images/labuan-bajo1.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="frontend/images/labuan-bajo2.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="frontend/images/labuan-bajo3.jpg" class="d-block w-100" alt="..." />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container produk-information-trip">
            <h3>Information Trip</h3>
            <div class="row row-cols-2 row-cols-md-5 g-4">
                <div class="col">
                    <h4>Accomodation</h4>
                    <p class="information-details">
                        <img src="frontend/images/hotel.png" alt="" />
                        Hotel 4 Nights
                    </p>
                </div>
                <div class="col">
                    <h4>Transportation</h4>
                    <p class="information-details">
                        <img src="frontend/images/plane.png" alt="" />
                        Garuda Indonesia
                    </p>
                </div>
                <div class="col">
                    <h4>Eat</h4>
                    <p class="information-details">
                        <img src="frontend/images/meal.png" alt="" />
                        Included
                    </p>
                </div>
                <div class="col">
                    <h4>Duration</h4>
                    <p class="information-details">
                        <img src="frontend/images/time.png" alt="" />
                        5 Day 4 Night
                    </p>
                </div>
                <div class="col">
                    <h4>Date</h4>
                    <p class="information-details">
                        <img src="frontend/images/calendar.png" alt="" />
                        12 March 2021
                    </p>
                </div>
            </div>
        </div>
        <div class="container produk-description">
            <h3>Description</h3>
            <h4>
                Nikmati liburan keliling labuan bajo selama 5 hari 4 malam dengan
                akomodasi dan transportasi yang nyaman.
            </h4>
        </div>
        <div class="container produk-price">
            <div class="row row-cols-2 row-cols-md-5 g-4">
                <div class="col">
                    <h5>IDR. 750,000.00<span>/ Person</span></h5>
                </div>
                <div class="col ms-auto produk-quantity">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button id="down" class="btn btn-default btn-quantity" onclick=" down('1')">
                                <img src="frontend/images/icon-minus.svg" alt="" />
                            </button>
                        </div>
                        <input type="text" id="myNumber" class="form-control input-number value-quantity" value="1"
                            readonly />
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default btn-quantity" onclick="up('10')">
                                <img src="frontend/images/icon-plus.svg" alt="" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row row-cols-2 row-cols-md-5 g-4">
                <div class="col">
                    <h5><span>Total :</span></h5>
                </div>
                <div class="col ms-auto">
                    <h5>IDR. 750,000.00</h5>
                </div>
            </div>
            <hr />
            <div class="row row-cols-2 row-cols-md-5 g-4">
                <div class="col"></div>
                <div class="col ms-auto">
                    <a href="checkout.html">
                        <button type="submit" class="btn btn-primary btn-book">
                            Book Now
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function up(max) {
        document.getElementById("myNumber").value =
            parseInt(document.getElementById("myNumber").value) + 1;
        if (document.getElementById("myNumber").value >= parseInt(max)) {
            document.getElementById("myNumber").value = max;
        }
    }

    function down(min) {
        document.getElementById("myNumber").value =
            parseInt(document.getElementById("myNumber").value) - 1;
        if (document.getElementById("myNumber").value <= parseInt(min)) {
            document.getElementById("myNumber").value = min;
        }
    }
</script>
