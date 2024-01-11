<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rent a Car - Drivvy</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/logo.png" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}" />
  </head>
  <body>
    @yield('content')
        <!-- Footer-->
    <div class="footer-basic">
      <footer>
          <div class="social">
            <a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i>
            </a><a href="https://www.facebook.com/?locale=id_ID"><i class="icon ion-social-twitter"></i></a>
            <a href="https://twitter.com/?lang=id"><i class="icon ion-social-facebook"></i></a></div>
          <ul class="list-inline">
              <li class="list-inline-item"><a href="index.html">Home</a></li>
              <li class="list-inline-item"><a href="aboutus.html">About</a></li>
              <li class="list-inline-item"><a href="#">Terms</a></li>
              <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
          </ul>
          <p class="copyright">Drivvy © 2023</p>
      </footer>
  </div>
  <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
