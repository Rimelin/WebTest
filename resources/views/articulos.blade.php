<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Articulos</title>
</head>
<body>
    <div class ="cabecera">
        <h1>Mi tiendita OP </h1> <img src="{{ asset('images/logo.jfif') }}" alt="Tienda de Electrónicos" class="logo">
        <div class="dropdown-container">
            <div class="dropdown">
                <button class="dropbtn">Categorías</button>
                <div class="dropdown-content">
                    <a href="#">Monitores</a>
                    <a href="#">GPU</a>
                    <a href="#">Teclados</a>
                    <a href="#">Audifonos</a>
                </div> 
            </div> 
            <div class="dropdown">
                <button class="dropbtn">Filtros</button>
                <div class="dropdown-content">
                    <a href="#">Menor a 2000 pesos</a>
                    <a href="#">Ofertas</a>
                    <a href="#">Unicas piezas</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Ordenar por...</button>
                <div class="dropdown-content">
                    <a href="#">Precio mayor a menor</a>
                    <a href="#">Precio menor a mayor</a>
                    <a href="#">Fecha de creacion</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
            @foreach ($productos as $producto)
                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card">
                        <img src="{{ $producto->foto }}" class="card-img-top imagen_producto" alt="{{ $producto->nombre }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">Marca: {{ $producto->marca }}</p>
                            <p class="card-text">Categoria: {{ $producto->categoria }}</p>
                            <p class="card-text">Precio: ${{ $producto->costo }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>