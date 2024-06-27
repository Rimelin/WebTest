<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="icon" type="image/jfif" href="{{ asset('images/logo.jfif') }}">
    <title>Tiendita OP</title>
</head>
<body>
<div class="cabecera">
    <h1>Mi tiendita OP</h1> 
    <img src="{{ asset('images/logo.jfif') }}" alt="Tienda de Electrónicos" class="logo">
    <div class="dropdown-container">
        <div class="dropdown">
            <button class="dropbtn">Categorías</button>
            <div class="dropdown-content">
                <a href="{{ url('/articulos?categoria=GPU') }}">GPU</a>
                <a href="{{ url('/articulos?categoria=Monitores') }}">Monitores</a>
                <a href="{{ url('/articulos?categoria=Teclados') }}">Teclados</a>
                <a href="{{ url('/articulos?categoria=Audifonos') }}">Audifonos</a>
                <a href="{{ url('/articulos') }}">Todos</a>
            </div>
        </div> 
        <div class="dropdown">
            <button class="dropbtn">Filtros</button>
            <div class="dropdown-content">
                <a href="{{ url('/articulos?' . http_build_query(array_merge(request()->except(['menora', 'unicas']), ['menora' => 2000]))) }}">Menor a 2000 pesos</a>
                <a href="{{ url('/articulos?' . http_build_query(array_merge(request()->except(['menora', 'unicas']), ['unicas' => 1]))) }}">Unicas piezas</a>
                <a href="{{ url('/articulos?' . http_build_query(request()->except(['menora', 'unicas']))) }}">Borrar filtros</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Ordenar por...</button>
            <div class="dropdown-content">
                <a href="{{ url('/articulos?' . http_build_query(array_merge(request()->except(['ordermayor_by', 'ordermenor_by', 'order_by']), ['ordermayor_by' => 'costo']))) }}">Precio mayor a menor</a>
                <a href="{{ url('/articulos?' . http_build_query(array_merge(request()->except(['ordermayor_by', 'ordermenor_by', 'order_by']), ['ordermenor_by' => 'costo']))) }}">Precio menor a mayor</a>
                <a href="{{ url('/articulos?' . http_build_query(array_merge(request()->except(['ordermayor_by', 'ordermenor_by', 'order_by']), ['order_by' => 'fecha_de_creacion']))) }}">Fecha de creación</a>
                <a href="{{ url('/articulos?' . http_build_query(request()->except(['ordermayor_by', 'ordermenor_by', 'order_by']))) }}">Borrar ordenamiento</a>
            </div>
        </div>
        <div>
            <a href="{{ url('/articulos') }}" class="button-resetall">Restablecer Todo</a>
        </div>
    </div>
</div>

    <div class="row">
            @foreach ($productos as $producto)
                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card">
                            <img src="{{ asset($producto->foto) }}" class="card-img-top imagen_producto" alt="{{ $producto->nombre }}">                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">Marca: {{ $producto->marca }}</p>
                            <p class="card-text">Categoria: {{ $producto->categoria }}</p>
                            <p class="card-text">Precio: ${{ $producto->costo }}</p>
                            <p class="card-text">Piezas disponibles: {{ $producto->numero_disponible }}</p>
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