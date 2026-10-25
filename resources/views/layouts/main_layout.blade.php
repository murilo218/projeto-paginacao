<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NOTES</title>
        
        <!-- Bootstrap 5 CSS CDN (Estilos bonitos e modernos) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- FontAwesome CDN (Para os ícones) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    </head>
    <body>
        @yield('content')

        <!-- Bootstrap 5 JS Bundle CDN (Necessário para componentes interativos) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>