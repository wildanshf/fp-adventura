@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('travel-package.update', $item->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title"
                            value="{{ $item->title }}">
                    </div>
                    <div class="form-group">
                        <label for="tripType">Trip Type</label>
                        <input type="text" class="form-control" name="tripType" placeholder="Trip Type"
                            value="{{ $item->tripType }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Description</label>
                        <textarea name="description" rows="10"
                            class="d-block w-100 form-control">{{ $item->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">Accomodation</label>
                        <input type="text" class="form-control" name="accomodation" placeholder="Accomodation"
                            value="{{ $item->accomodation }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Transportation</label>
                        <input type="text" class="form-control" name="transportation" placeholder="Transportation"
                            value="{{ $item->transportation }}">
                    </div>
                    <div class="form-group">
                        <label for="tripDate">Departure Date</label>
                        <input type="date" class="form-control" name="tripDate" placeholder="Trip Date"
                            value="{{ $item->tripDate }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Duration</label>
                        <input type="text" class="form-control" name="duration" placeholder="Duration"
                            value="{{ $item->duration }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Price"
                            value="{{ $item->price }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->


@endsection
