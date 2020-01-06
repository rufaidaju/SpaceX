<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SpaceX @yield('title')</title>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/mean.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark navbar-fixed-top">
          <div class="container">
              <a class="navbar-brand" href="#">
                <img src="https://www.spacex.com/sites/spacex/files/spacex_logo_white.png" alt="SpaceX logo"  class="d-inline-block align-top img-responsive"  >
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/all-rockets">ALL ROCKETS</a>
                  </li>
                </ul>
                @yield('search')
                @yield('back-btn')
              </div>
          </div>
        </nav>
        <!-- content -->

        <!-- One rocket and home page content -->
        @yield('rocket')

        <!-- All rockets content -->
         @yield('all')
         
        <!--Footer-->
        <footer class="footer-expand bg-dark footer ">
          <div class="container">
            <div class="row">
              <div class="col-md" col-xs-12>
                <ul class="navbar-nav mr-auto footer-expand">
                  <li>
                    <a  href="#">
                      <img src="https://www.spacex.com/sites/spacex/files/spacex_logo_white.png" alt="SpaceX logo"  class="footer-brand d-inline-block  img-responsive"  >
                    </a>
                  </li>
                  <li class="footer-item">
                    <a class="footer-link" href="https://twitter.com/spacex">TWITTER</a>
                  </li>
                  <li class="footer-item">
                    <a class="footer-link" href="https://www.youtube.com/spacex">YOUTUBE</a>
                  </li>
                  <li class="footer-item">
                    <a class="footer-link" href="https://www.instagram.com/spacex/">INSTAGRAM</a>
                  </li>
                </ul>
              </div>
              <div class ="footer-end">
                 © 2019 Space Exploration Technologies Corp.
               </div>
              </div>
            </div> 
          </div>
        </footer>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('script')
    </body>
</html>
