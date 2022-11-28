<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','RPG-Manager')</title>
</head>
<body>
    <header>
        <h1>Menu Header et logo</h1>
    </header>
    <main>
        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <h1>@yield('page_title', 'error')</h1>

        @yield('content','Erreur pas de contenu retourné')
    </main>
    <footer>
        2022 &copy; RPG Manager by Thanh & Marlee
    </footer>
</body>
</html>