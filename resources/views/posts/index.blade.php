@extends("layout.master")

@section("content")


        <div class="col-sm-8 blog-main">

        @foreach($posts as $post)

        @include("posts.posts")
          
        @endforeach
        
        @if (request()->is('/'))
            {{$posts->links()}}    
        @endif
    
        
         
        </div>

@endsection
        
   

