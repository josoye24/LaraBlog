
<div class="topnav blog-masthead" id="myTopnav">
  <div class="container">
  <a href="/" class="active">Home</a>
  <a href="/posts/create">Create Post</a>
  <a href="#contact" >Contact</a>

  <div class="topnav-right ">
    
    @guest
      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      @if (Route::has('register'))
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      @endif
      
      @else
       <a> {{ Auth::user()->name }} </a>
        <a href="{{ route('logout') }}">
          {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
    @endguest
  
</div>
</div> 
</div>     

</div>
</div>

<style>
    
</style>
  
  

</nav>
</div>
</div>

          