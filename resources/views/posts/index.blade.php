@extends("layout.master")

@section("content")

    <div class="col-sm-8 blog-main">

        @if ($flash = session("message"))

        <div class="alert alert-success" role="alert">
          {{ $flash }}
        </div>
  
        @endif


        @foreach($posts as $post)
    
            @include("posts.posts")
    
        @endforeach

        @if (request()->is('/'))
            {{$posts->links()}}    
        @endif

    </div>

@endsection
        
   


