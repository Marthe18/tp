<!DOCTYPE html>
<html>
<head>
    <style>
        .navbar {
            background-color: #333; 
            overflow: hidden; 
        }

      
        .navbar a {
            float: left; 
            display: block; 
            color: white; 
            text-align: center; 
            padding: 14px 16px; 
            text-decoration: none; 
        }

        .navbar a:hover {
            background-color: #ddd; 
            color: black; 
        }

  
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }

    
        .image-container {
            width: 25%; 
            display: inline-block;
        }

        
        .image-container img {
            max-width: 100%; 
            border: 3px solid #fff; 
            border-radius: 10px; 
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="/admin/property">Les Biens</a>
    <a href="#contact">Contact</a>
</div>

<h1>Bienvenue sur Notre Page d'Accueil</h1>

<div class="image-container">
<img src="{{ asset('images/image1.jpeg') }}" alt="Image 1"></div>

</div>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Mon Agence</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Agence</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @php
            $route = request()->route()->getName();
            @endphp
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('property.index') }}" class="nav-link {{ str_contains($route, 'property.') ? 'active' : '' }}">
                            Biens
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>

</body>
</html>
