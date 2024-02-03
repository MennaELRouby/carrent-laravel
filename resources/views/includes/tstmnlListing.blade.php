<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="section-heading"><strong>Testimonials</strong></h2>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row">
            @foreach ($tstmnl as $data)
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="testimonial-2">
                    <blockquote class="mb-4">
                        <p>{{ Str::limit($data->content, 40) }}</p>
                    </blockquote>
                    <div class="d-flex v-card align-items-center">
                        <img src="{{asset('assets/images/'.$data->image)}}" alt="Image" class="img-fluid mr-3">
                        <div class="author-name">
                            <span class="d-block">{{$data->name}}</span>
                            <span>{{$data->position}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>