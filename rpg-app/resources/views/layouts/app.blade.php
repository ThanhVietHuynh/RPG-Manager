<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="/js/script.js"></script>
    <title>@yield('title','RPG-Manager')</title>
</head>
<body>
    <header>
      <?php if(Session::get('success')){ ?>
          <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand">Menu</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('/') }}">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('characters.create') }}">Créer un personnage</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('characters.show','character') }}">Mes personnages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Déconnexion</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          
        <?php }else{ ?>
          <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand">Menu</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('/') }}">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('registration') }}">Inscription</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
       <?php } ?>
    </header>

    <main>
        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-info">{{ $error }}</div>
                @endforeach
            </div>
        @endif

        @yield('content','Erreur pas de contenu retourné')
    </main>

    <footer class="py-5 bg-dark">
      <div class="container">
          <p class="m-0 text-center text-white">November 2022 &copy; RPG Manager by Thanh & Marlee</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>

