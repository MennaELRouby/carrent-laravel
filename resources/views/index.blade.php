@extends('layouts.main')
@section('title','Home-CarRental')
@section('content')

<div class="hero" style="background-image: url('assets/images/hero_1_a.jpg');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-10">

        <div class="row mb-5">
          <div class="col-lg-7 intro">
            <h1><strong>Rent a car</strong> is within your finger tips.</h1>
          </div>
        </div>

        @include('includes.searchbar')

      </div>
    </div>
  </div>
</div>
@include('includes.howItWorks')
@include('includes.meetThem')
@include('includes.carListing')
@include('includes.features')
@include('includes.testimonials')

@section('footer')
@include('includes.rentCarNow')
@parent
@endsection

@endsection