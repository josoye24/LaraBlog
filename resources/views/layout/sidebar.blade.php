<div class="col-sm-3 offset-sm-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>Recent Post</h4>
      @foreach ($recentPost as $post)

      <li>
        <a href="/posts/{{$post->title }}">
          {{$post->title }}</a>   
      </li>
      @endforeach
  
  </div>
  <div class="sidebar-module">
    <h4>Archives</h4>
      <ol class="list-unstyled">

        @foreach ($archieves as $archieve)
          <li>
            <a href="/?month={{ $archieve["month"] }}&year={{ $archieve["year"] }}">
              {{ $archieve["month"]." " . $archieve["year"] }}
            </a>
          </li>
        @endforeach

      </ol>
    </div>
    <div class="sidebar-module">
      <h4>Tags</h4>
        <ol class="list-unstyled">
          
          @foreach ($tags as $tag )
          <li>
            <a href="/posts/tags/{{ $tag }}">
              {{ $tag }}
            </a>
          </li>
          @endforeach
        
        </ol>
    </div>
</div><!-- /.blog-sidebar -->