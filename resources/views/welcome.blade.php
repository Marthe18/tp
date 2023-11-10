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

</body>
</html>
