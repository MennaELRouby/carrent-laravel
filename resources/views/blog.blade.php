@extends('layouts.main')
@section('title','Blog-CarRental')
@section('content')

<div class="hero inner-page" style="background-image: url('assets/images/hero_1_a.jpg');">

  <div class="container">
    <div class="row align-items-end ">
      <div class="col-lg-5">

        <div class="intro">
          <h1><strong>Blog</strong></h1>
          <div class="custom-breadcrumbs"><a href="{{route('index')}}">Home</a> <span class="mx-2">/</span> <strong>Blog</strong></div>
        </div>

      </div>
    </div>
  </div>
</div>

@include('includes.bestCarRent')
@section('footer')
@include('includes.rentCarNow')
@parent
@endsection

@endsection