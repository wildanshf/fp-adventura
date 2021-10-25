@extends('layouts.main')

@section('container')
    <div class="container halaman-produk">
        <div class="container produk-headline">
            <h1>{{ $items->title }}</h1>
            <h2>{{ $items->tripType }}</h2>
        </div>

        @if ($items->galleries->count() > 0)
            <div class="container gallery">
                <div class="xzoom-container">
                    <img src="{{ Storage::url($items->galleries->first()->image) }}" class="xzoom"
                        id="xzoom-default" xoriginal="{{ Storage::url($items->galleries->first()->image) }}" />
                </div>
                <div class="xzoom-thumbs">
                    @foreach ($items->galleries as $gallery)
                        <a href="{{ Storage::url($gallery->image) }}">
                            <img src="{{ Storage::url($gallery->image) }}" class="xzoom-gallery" style="max-width: 256px"
                                xpreview="{{ Storage::url($gallery->image) }}" />
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="container produk-information-trip">
            <h3>Information Trip</h3>
            <div class="row row-cols-2 row-cols-md-4 g-4">
                <div class="col">
                    <h4>Accomodation</h4>
                    <p class="information-details">
                        <img src="{{ url('frontend/images/hotel.png') }}" alt="" />
                        {{ $items->accomodation }}
                    </p>
                </div>
                <div class="col">
                    <h4>Transportation</h4>
                    <p class="information-details">
                        <img src="{{ url('frontend/images/plane.png') }}" alt="" />
                        {{ $items->transportation }}
                    </p>
                </div>
                <div class="col">
                    <h4>Duration</h4>
                    <p class="information-details">
                        <img src="{{ url('frontend/images/time.png') }}" alt="" />
                        {{ $items->duration }}
                    </p>
                </div>
                <div class="col">
                    <h4>Date</h4>
                    <p class="information-details">
                        <img src="{{ url('frontend/images/calendar.png') }}" alt="" />
                        {{ Carbon\Carbon::create($items->tripDate)->format('n F Y') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="container produk-description">
            <h3>Description</h3>
            <h4>
                {{ $items->description }}
            </h4>
        </div>
        <div class="container produk-price">
            <hr>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                    <h5>@currency($items->price),00<span> / Person</span></h5>
                </div>
                <div class="col ms-auto">
                    @auth
                        <form action="{{ route('checkout-process', $items->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-primary btn-book">
                                Book Now
                            </button>
                        </form>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}">
                            <button type="submit" class="btn btn-primary btn-book ms-auto">
                                Book Now
                            </button>
                        </a>
                    @endguest
                </div>
            </div>
            <hr>
        </div>
    </div>
@endsection

{{-- <script>
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
</script> --}}
