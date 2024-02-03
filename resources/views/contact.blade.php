@extends('layouts.main')
@section('title','Contact-CarRental')
@section('content')

<div class="hero inner-page" style="background-image: url('assets/images/hero_1_a.jpg');">

  <div class="container">
    <div class="row align-items-end ">
      <div class="col-lg-5">

        <div class="intro">
          <h1><strong>Contact</strong></h1>
          <div class="custom-breadcrumbs"><a href="{{route('index')}}">Home</a> <span class="mx-2">/</span> <strong>Contact</strong></div>
        </div>

      </div>
    </div>
  </div>
</div>


<div class="site-section bg-light" id="contact-section">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-7 text-center mb-5">
        <h2>Contact Us Or Use This Form To Rent A Car</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
      </div>
    </div>
    @include('includes.sendMessage')
  </div>
</div>
@endsection