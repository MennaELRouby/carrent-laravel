@extends('layouts.main')
@section('title','Listing-CarRental')
@section('content')

<div class="hero inner-page" style="background-image: url('assets/images/hero_1_a.jpg');">

  <div class="container">
    <div class="row align-items-end ">
      <div class="col-lg-5">

        <div class="intro">
          <h1><strong>Listings</strong></h1>
          <div class="custom-breadcrumbs"><a href="index.html">Home</a> <span class="mx-2">/</span> <strong>Listings</strong></div>
        </div>

      </div>
    </div>
  </div>
</div>

@push('pagination')
<div class="row">
  <div class="col-5">
    <div class="custom-pagination">
      <a href="#">1</a>
      <span>2</span>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
    </div>
  </div>
</div>
@endpush
@include('includes.carListing')


@include('includes.testimonials')

@section('footer')
@include('includes.rentCarNow')
@parent
@endsection

@endsection