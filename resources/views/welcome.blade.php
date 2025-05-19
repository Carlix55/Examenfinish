<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido al CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">
    <div class="container text-center">
        <h1 class="display-4 mb-4">CRUD Laravel 12.x</h1>
        <p class="lead mb-4">Gestión de empleados y departamentos.</p>

        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="{{ route('empleados.index') }}" class="btn btn-primary btn-lg">Ver Empleados</a>
            <a href="{{ route('departamentos.index') }}" class="btn btn-secondary btn-lg">Ver Departamentos</a>
        </div>

        <footer class="mt-5 text-muted small">
            Desarrollado con ❤️ usando Laravel | Render Deployment Ready
        </footer>
    </div>
</body>
</html>
