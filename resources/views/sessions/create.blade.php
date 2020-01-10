@extends("layout.master")

@section("content")

<div class="col-sm-8 blog-main">

    <h1>Login</h1>
      
    <form method="POST" action="login">
        @csrf
    
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    
        <div class="form-group">
            <label for="name">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        
        <button type="submit" class="btn btn-success">Login</button>
      
        @include("layout.errors")  

    </form>


    
</div>


@endsection

