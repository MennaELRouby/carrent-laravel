@extends('layouts.main')
@section('title','Single-CarRental')
@section('content')

<div class="hero inner-page" style="background-image: url('../assets/images/hero_1_a.jpg');">

  <div class="container">
    <div class="row align-items-end ">
      <div class="col-lg-12">

        <div class="intro">
          <h1><strong>Single Blog Posts: {{$car->title}}</strong></h1>
          <div class="pb-4"><strong class="text-black">Posted on {{$car->created_at->format('m/d/y')}}</strong></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 blog-content">
        <img src="{{asset('assets/images/'.$car->image)}}" alt="" class="img-fluid p-3 mb-5 bg-white rounded">

        <div class="grey-bg container-fluid">
          <section id="minimal-statistics">
            <div class="row">
              <div class="col-12 mt-3 mb-1">
                <h4 class="text-uppercase">Properties</h4>
                <p>Car Details</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-pencil primary font-large-2 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>{{$car->doors}}</h3>
                          <span>Doors</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-speech warning font-large-2 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>{{$car->luggage}}</h3>
                          <span>Luggage</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-graph success font-large-2 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>{{$car->price}} $</h3>
                          <span>Price</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <p class="lead">{{$car->content}}</p>

        <div class="pt-5">
          <p>Category: <a href="#">{{$car->category->cat_name}}</a></p>
        </div>
        @include('includes.comments')

      </div>
      <div class="col-md-4 sidebar">
        <div class="sidebar-box">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="icon fa fa-search"></span>
              <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
            </div>
          </form>
        </div>
        <div class="sidebar-box">
          <div class="categories">
            <h3>Categories</h3>
            @foreach($category as $data)
            <li><a href="#">{{$data->cat_name}} <span>{{$data->car->count()}}</span></a></li>
            @endforeach

          </div>
        </div>
        <div class="sidebar-box">
          <img src="{{asset('assets/images/person_1.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid mb-4 w-50 rounded-circle">
          <h3 class="text-black">About The Author</h3>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
          <p><a href="#" class="btn btn-primary btn-md text-white">Read More</a></p>
        </div>

        <div class="sidebar-box">
          <h3 class="text-black">Paragraph</h3>
          <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@section('footer')
@parent
@endsection
@endsection