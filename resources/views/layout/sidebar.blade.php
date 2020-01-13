<div class="col-sm-3 offset-sm-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>Recent Post</h4>
      @foreach ($recentPost as $post)
        <li>
          <a href="/posts/{{$post->title }}">
            {{ str_limit($post->title, 30) }}</a>   
        </li>
        <hr>
      @endforeach
  
  </div>
 
  <div class="sidebar-module">
    <h4 class="mt-3">Archives</h4>
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
          
          @foreach ($tags->slice(0, 10) as $tag )
          <li>
            <a href="/posts/tags/{{ $tag }}">
              {{ $tag }}
            </a>
          </li>
          @endforeach
        
        </ol>
    </div>
</div>