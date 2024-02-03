<div class="row">
    <div class="col-lg-8 mb-5">
        <form action="{{route('messagesent')}}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                    <input type="text" class="form-control" placeholder="First name" name="fname">
                    @error('fname')
                    {{$message}}
                    @enderror
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Last name" name="lname">
                    @error('lname')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Email address" name="email">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <textarea name="content" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                    @error('content')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 mr-auto">
                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-4 ml-auto">
        <div class="bg-white p-3 p-md-5">
            <h3 class="text-black mb-4">Contact Info</h3>
            <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                    <span class="d-block text-black">Address:</span>
                    <span>34 Street Name, City Name Here, United States</span>
                </li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
            </ul>
        </div>
    </div>
</div>