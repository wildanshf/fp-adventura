@extends('layouts.main')

@section('container')
    <div class="section-details-content">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details mb-3">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h1>Who is Going?</h1>
                        <p>
                            {{ $item->travel_package->title }}
                        </p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td scope="col">Name</td>
                                        <td scope="col">Gender</td>
                                        <td scope="col">Birth Date</td>
                                        <td scope="col"></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($item->details as $detail)
                                        <tr>
                                            <td class="align-middle">
                                                {{ $detail->username }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $detail->gender }}
                                            </td>
                                            <td class="align-middle">
                                                {{ Carbon\Carbon::create($detail->date_birth)->format('n F Y') }}
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ route('checkout-remove', $detail->id) }}">
                                                    <img src="{{ url('frontend/images/icon-remove.png') }}" alt="" />
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                No Visitor
                                            </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form action="{{ route('checkout-create', $item->id) }}" method="POST">
                                @csrf
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <label class="sr-only" for="username">Name</label>
                                        <input type="text" name="username" class="form-control" id="username"
                                            placeholder="Name" required>
                                    </div>
                                    <div class="col-auto">
                                        <label class="sr-only" for="inlineFormCustomSelectPref">Preference</label>
                                        <select name="gender" class="form-select my-1 mr-sm-2"
                                            id="inlineFormCustomSelectPref" required>
                                            <option selected>Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <label class="sr-only" for="birth_date">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Birth Date</div>
                                            </div>
                                            <input type="date" name="date_birth" class="form-control" id="birth_date"
                                                placeholder="Birth Date" required>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Add Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Information</h2>
                        <table class="checkout-informations">
                            <tr>
                                <th width="50%">Members</th>
                                <td width="50%" class="text-right">{{ $item->details->count() }} person</td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">@currency( $item->travel_package->price ),00 /
                                    person</td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right text-blue">@currency( $item->transaction_total ),00</td>
                            </tr>
                            {{-- <tr>
                                <th width="50%">Total (+Unique)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue">@currency( $item->travel_package->price )</span><span
                                        class="text-orange"> + {{ mt_rand(0, 99) }}</span>
                                </td>
                            </tr> --}}
                        </table>

                        <hr />
                        <h2>Payment Instructions</h2>
                        <p class="payment-instructions">
                            Please complete your payment before to continue the wonderful
                            trip
                        </p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="{{ url('frontend/images/icon-bank.png') }}" alt="" class="bank-image" />
                                <div class="description">
                                    <h3>PT Adventura Sejahtera</h3>
                                    <p>
                                        0881 8829 8800
                                        <br />
                                        Bank Mandiri
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            {{-- <div class="bank-item">
                                <img src="{{ url('frontend/images/icon-bank.png') }}" alt="" class="bank-image" />
                                <div class="description">
                                    <h3>PT Nomads ID</h3>
                                    <p>
                                        0899 8501 7888
                                        <br />
                                        Bank HSBC
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="{{ route('checkout-success', $item->id) }}"
                            class="btn btn-primary btn-join-now mt-3 py-2 w-100">
                            I Have Made Payment
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('detail', $item->travel_package->slug) }}" class="text-muted">
                            Cancel Booking
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
