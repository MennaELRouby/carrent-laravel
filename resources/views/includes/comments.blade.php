<div class="pt-5">
    <h3 class="mb-5">{{$cmt->count()}} Comments</h3>
    <ul class="comment-list">
        @foreach ($cmt as $data)

        <li class="comment">
            <div class="vcard bio">
                <img src="{{asset('assets/images/person_2.jpg')}}" alt="Free Website Template by Free-Template.co">
            </div>
            <div class="comment-body">
                <h3>{{$data->name}}</h3>
                <div class="meta">{{$data->created_at}}</div>
                <p>{{$data->content}}</p>
                <p><a href="#" class="reply">Reply</a></p>
            </div>
        </li>
        @endforeach
        <!-- END comment-list -->
        <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="{{route('comment')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website" name="website">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="content" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="hidden" hidden value="{{$car->id}}" name="car_id">

                <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary btn-md text-white">
                </div>

            </form>
        </div>

</div>