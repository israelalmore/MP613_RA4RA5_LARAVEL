<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>

    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Include any additional stylesheets or scripts here -->
</head>

<body class="container">

    <h1 class="mt-4">Lista de Peliculas</h1>
    <ul>
        <li><a href=/filmout/oldFilms>Pelis antiguas</a></li>
        <li><a href=/filmout/newFilms>Pelis nuevas</a></li>
        <li><a href=/filmout/filmsByYear>Pelis por año</a></li>
        <li><a href=/filmout/filmsByGenre>Pelis por genero</a></li>
        <li><a href=/filmout/sortByYear>Pelis ordenadas de mayor a menor año</a></li>
        <li><a href=/filmout/countFilms>Contador de pelis</a></li>
    </ul>

    <form>
        <label for="filmName">Nombre</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="fname">Año</label><br>
        <input type="text" id="year" name="year"><br>

        <label for="fgenre">Genero</label><br>
        <input type="text" id="genre" name="genre"><br>

        <label for="fcountry">Pais</label><br>
        <input type="text" id="contry" name="country"><br>

        <label for="fduration">Duracion</label><br>
        <input type="text" id="duration" name="duration"><br>

        <label for="image">Imagen URL</label><br>
        <input type="text" id="image" name="image"><br>

        <input type="submit">
    </form>
    <!-- Add Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Include any additional HTML or Blade directives here -->

</body>

</html>
