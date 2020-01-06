
@extends("layout.master")


@section("content")

    <div class="col-sm-8 blog-main"> 

        <h1>{{ $post->title }} </h1>

            @if(count($post->tags))
                
                    @foreach($post->tags as $tag)
                       <a href="/posts/tags/{{ $tag->name }}">
                        {{ $tag->name }}</a> 
                    @endforeach
                <br>

            @endif

            {{ $post->body }} 

            <hr> <br>

        <div class="comments">

            @foreach ($post->comments as $comment)

                
                <li class = "list-group-item">
                    
                    <strong>
                    {{$comment->created_at->diffForHumans()}} : &nbsp
                    </strong>

                    {{ $comment->body }}
                </li>
                
        
            @endforeach

        </div>
        
        <hr>

        <div class="card">

            <div class="card-block">
            
            <form method="POST" action="/posts/{{$post->id}}/comments">
                

                @csrf 


                    <div class="form-group">
                    <textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Publish</button>
                    
                @include("layout.errors")  

            </form> 


            </div>
            
        
        </div>

    </div>
    
    

@endsection

