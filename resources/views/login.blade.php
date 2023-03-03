
@extends("master")
@section('content')
<h1 style="text-align: center; margin-top: 50px;">Login Page</h1>
    <div class = "container" style="height: 350px; padding-top: 50px;">
        <div class = "row">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="xxxxxxxx">
                <button type="button" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
            </div>
        </div>
    </div>
</div>

@endsection