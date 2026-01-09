<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h2 class="mb-4">Mensajes Guardados</h2>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Mensaje</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $message)
                    <tr>
                        <td>{{ $message['name'] }}</td>
                        <td>{{ $message['email'] }}</td>
                        <td>{{ $message['message'] }}</td>
                        <td>{{ $message['date'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No hay mensajes</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <a href="/" class="btn btn-primary">Volver al formulario</a>
    </div>

</body>

</html>
