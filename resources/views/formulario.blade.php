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
    <title>Formulario</title>
</head>
<body>
<div class="container"> 
        <div class="row justify-content-center formulario">
            <div class="col-md-6 formulario">
                <h2 class="text-center mb-4">Formulario de Subida de Producto</h2>
                <!-- Happy path -->
                @if (session('success'))
                     <div class="alert alert-success">
                          {{ session('success') }}
                     </div>

                 @endif

            <!-- Errores de validación -->
                  @if ($errors->any())
                      <div class="alert alert-danger">
                         <ul>
                          @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                          @endforeach
                          </ul>
                       </div>
                    @endif

                <form action="/productos" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>

                    <label for="categoria">Categoría:</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" required>

                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control" id="marca" name="marca" required>

                    <label for="fecha_de_creacion">Fecha de Creación:</label>
                    <input type="date" class="form-control" id="fecha_de_creacion" name="fecha_de_creacion" required>

                    <label for="costo">Costo:</label>
                    <input type="number" class="form-control" id="costo" name="costo" step="0.01" required>

                    <label for="numero_disponible">Piezas disponibles:</label>
                    <input type="number" class="form-control" id="numero_disponible" name="numero_disponible" required>

                    <label for="foto">Foto:</label>
                    <input type="file" class="form-control-file" id="foto" name="foto" required>

                    <button type="submit" class="btn btn-primary btn-block mt-4">Subir Producto</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>