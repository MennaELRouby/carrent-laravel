@extends('layouts.main')
@section('title','About-CarRental')
@section('content')

<div class="hero inner-page" style="background-image: url('assets/images/hero_1_a.jpg');">

  <div class="container">
    <div class="row align-items-end ">
      <div class="col-lg-5">

        <div class="intro">
          <h1><strong>About</strong></h1>
          <div class="custom-breadcrumbs"><a href="{{route('index')}}">Home</a> <span class="mx-2">/</span> <strong>About</strong></div>
        </div>

      </div>
    </div>
  </div>
</div>



<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
        <img src="{{asset('assets/images//hero_2.jpg')}}" alt="Image" class="img-fluid rounded">
      </div>
      <div class="col-lg-4 mr-auto">
        <h2>Car Company</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit suscipit, repudiandae similique accusantium eius nulla quam laudantium sequi.</p>
        <p>Debitis voluptates corporis saepe molestias tenetur ab quae, quo earum commodi, laborum dolore, fuga aliquid delectus cum ipsa?</p>
      </div>
    </div>
  </div>
</div>

@include('includes.team')

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="{{asset('assets/images//hero_1.jpg')}}" alt="Image" class="img-fluid rounded">
      </div>
      <div class="col-lg-4 ml-auto">
        <h2>Our History</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit suscipit, repudiandae similique accusantium eius nulla quam laudantium sequi.</p>
        <p>Debitis voluptates corporis saepe molestias tenetur ab quae, quo earum commodi, laborum dolore, fuga aliquid delectus cum ipsa?</p>
      </div>
    </div>
  </div>
</div>

@section('footer')
@include('includes.rentCarNow')
@parent
@endsection
@endsection