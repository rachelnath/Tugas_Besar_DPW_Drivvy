@extends('layouts.frontend')

@section('content')
<!-- Section-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-2 px-lg-0">
        <a class="navbar-brand" href="#"><img src="{{asset('frontend/assets/logo.png')}}" width="160px" height="35px" alt=""></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link font-weight-bold active" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <h3 class="text-center mb-5">Choose Your Rental Car</h3>
        <div
          class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
        >
        @foreach($cars as $car)
          <div class="col mb-5" style="width: 350px">
            <div class="card h-100" >
              <!-- Sale badge-->
              <div class="badge badge-custom text-uppercase {{$car->status == '1' ? 'bg-success' : 'bg-danger'}} text-white position-absolute" style="top: 0; right: 0">
                @if($car->status == '1')
                Available
                @else
                Not Available
                @endif
              </div>
            <!-- Product image-->
            <img
            class="card-img-top"
            src="{{URL('frontend/assets/Mobil/' . $car->gambar . '')}}"
            alt="..."
            />
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{$car->nama_mobil}}</h5>
                <!-- Product price-->
                <div class="rent-price mb-3">
                  <span class="text-primary">Rp. {{number_format($car->harga_sewa, 0, ',' , '.')}}/</span>day
                </div>
                <ul class="list-unstyled list-style-group">
                  <li
                  class="border-bottom p-2 d-flex justify-content-between"
                  >
                  <span>Fuel</span>
                  <span style="font-weight: 600">{{$car->bahan_bakar}}</span>
                </li>
                <li
                class="border-bottom p-2 d-flex justify-content-between"
                >
                <span>Chairs Amount</span>
                <span style="font-weight: 600">{{$car->jumlah_kursi}}</span>
              </li>
              <li
              class="border-bottom p-2 d-flex justify-content-between"
              >
              
              <span>Transmission</span>
                <span class="text-uppercase" style="font-weight: 600">
                  @if($car->transmisi == '1')
                  Manual
                  @else
                  Automatic
                  @endif
                </span>
            </li>
          </ul>
        </div>
      </div>
      <!-- Product actions-->
      <div class="card-footer border-top-0 bg-transparent">
        <div class="text-center">
          @if($car-> status == '1')
          <button class="btn btn-primary mt-auto" href="https://wa.me/+62895377044585">Rent</button>
          @else 
          <button class="btn btn-primary mt-auto" href="https://wa.me/+62895377044585" disabled>Rent</button>
            @endif
          <a class="btn btn-info mt-auto text-white" href="{{ route('detail', ['id' => $car->id]) }}">Detail</a>
            </div>
          </div>
         </div>
      </div>
    @endforeach
          
      </div>
    </div>
  </section>
@endsection