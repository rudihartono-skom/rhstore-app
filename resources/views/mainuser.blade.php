<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RhStore | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset ('/') }}style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary-subtle">
        <div class="container">
          <a class="navbar-brand text-bold" href="#">
            <img src="{{ asset('/') }}images/logorhscout.jpg" alt="Logo" width="30" class="d-inline-block align-text-top rounded-circle">
            <b>Rhscout<span>Percetakan.</span></b>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
             <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="/konsumen">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/t_konsumen">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/r_transaksi">Riwayat Transaksi</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>
    <footer class="footer py-3 mt-3 bg-secondary-subtle">
        <div class="container">
          <span class="text-dark"><b>© 2023 | HarStore. </b></span>
          <p class="float-end mb-1">
            <a class="text-dark" href="#">Back to top</a>
          </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
