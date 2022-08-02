<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPS530 - Final Project</title>
    <link rel="stylesheet" href="css/bulma.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="icon" href="img/tab.png">
  </head>
  <body>
      @yield('content')
  <body>
  <footer class="footer">
        <div class="has-text-centered">
            <p>
                <a class="m-3" href="{{ url('/') }}">Home</a>
                <a class="m-3" href="{{ url('/install') }}">Installation</a>
                <a class="m-3" href="{{ url('/tutorial') }}">Tutorial</a>
                <a class="m-3" href="{{ url('/demo') }}">Demo</a>
                <a class="m-3" href="{{ url('/review') }}">Review</a>
                <a class="m-3" href="{{ url('/credits') }}">Credits</a>
            </p>
            
            © 2021 EldossJogy Aminnausin 
        </div>
    </footer>
</html>
