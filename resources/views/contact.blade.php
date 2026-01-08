<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h2 class="mb-4">Formulario de Contacto</h2>

        <div id="alert"></div>

        <form id="contactForm">
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" id="name" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" id="email" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Mensaje</label>
                <textarea id="message" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="/registros" class="btn btn-secondary">Ver registros</a>
        </form>
    </div>

    <script src="/js/contact.js"></script>
</body>

</html>
