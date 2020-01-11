
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  body {margin:0;font-family:Arial}
  
  .topnav {
    overflow: hidden;
  }
  
  .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  .active {
    background-color: #016641;
    color: white;
  }
  
  .topnav .icon {
    display: none;
  }
  

  .topnav a:hover {
    background-color: #41a681;
    color: white;
  }
  
  
  @media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {
      display: none;
    }
    .topnav a.icon {
      float: right;
      display: block;
    }
  }
  
  @media screen and (max-width: 600px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
    .topnav.responsive {float: none;}
    .topnav.responsive {position: relative;}
    .topnav.responsive {
      display: block;
      width: 100%;
      text-align: left;
    }

  }
  </style>

<div class="topnav blog-masthead" id="myTopnav">
  <div class="container">
  <a href="/" class="active">Home</a>
  <a href="/posts/create">Create Post</a>
  <a href="#">Contact</a>
  <a href="#">About</a>

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
    @endguest
  
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div> 
</div>     

</div>
</div>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
 
 
 <style>
  .topnav-right {
    float: right;
  }
  </style>
  
  

{{--

<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">Home</a>
          <a class="nav-link" href="#">New features</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New hires</a>
          <a class="nav-link" href="#">About</a>
    



          
          
          <body>
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                         
        
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
        
               
            </div>
        </body>    
-}}
{{--  
                      @if (Auth::check())
                      <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
                    @endif
--}}

                  </nav>
                </div>
              </div>
          
          