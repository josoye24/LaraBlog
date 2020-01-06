@extends("layout.master")

@section("content")

<div class="col-sm-8 blog-main">

    <h1>Registration</h1>
      
    <form method="POST" action="register">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div> 
    
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    
        <div class="form-group">
            <label for="name">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="name">Password Confirmation</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>


        <button type="submit" class="btn btn-primary">Register</button>
      
        @include("layout.errors")  

    </form>


    
</div>


@endsection

