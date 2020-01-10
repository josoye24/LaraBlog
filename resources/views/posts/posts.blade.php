
<div class="card border-0 shadow mb-5 d-block guide-preview">
  <div class="card-body d-flex p-0 align-items-stretch">
    <div class="p-4 bg-guide text-white d-flex align-items-center justify-content-center guide-preview-category">
      <div class="text-center">
        <div class="mt-2">
          <p class="post-meta">
            By {{$post->user->name }} <br>
            on {{$post->created_at->toFormattedDateString()}} </a> 
          </p>
        </div>
      </div>
    </div>
      <div class="p-4 d-flex align-items-center w-100">
      <div class="w-100">
        <a href="/posts/{{$post->title }}" class="d-block text-guide guide-preview-title">
          {{$post->title }}</a>    
        <div class="p mb-4"> 
          {{ str_limit ($post->body, 130) }}   
        </div>
        <a href="/posts/{{$post->title }}" class="btn btn-sm btn-guide">Read More →</a>
      </div>
    </div>
  </div>
</div>