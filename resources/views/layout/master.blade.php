
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="LaraBlog is an open source Blog project based on Laravel 5.8">
    <meta name="keywords" content="laravel,  bootstrap 4, blog, news">
    <meta name="author" content="Joseph">
    <meta name="twitter:site" content="@josoye24">
    
    <title>LaraBlog</title>
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">

  </head>

    <body>
    @include("layout.nav")

<div class="mailchimp">
  <div class="container">
    <h1 class="blog-title mb-3" style="color:#FFF">LaraBlog</h1>
    <p>Made with ❤️ + Laravel</p>
  </div>
</div>
            

<div class="container">
  <div class="row">
    @yield("content")
    @include("layout.sidebar")

  </div>

</div>
    @include("layout.footer")
    
  </body>
</html>
