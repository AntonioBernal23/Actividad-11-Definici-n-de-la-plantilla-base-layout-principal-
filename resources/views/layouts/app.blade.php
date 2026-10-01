<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Alimentos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 min-h-screen flex flex-col font-sans">

    <header class="bg-slate-200 border-b border-slate-300 shadow-sm">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex flex-wrap items-center justify-between">
            <a href="#" class="text-xl font-bold text-blue-600 lowercase tracking-wide">
                banco de alimentos
            </a>

            <div class="flex flex-wrap items-center gap-4 text-sm font-medium text-slate-700 lowercase mt-2 sm:mt-0">
                <a href="#" class="hover:text-blue-600 transition">inicio</a>
                <a href="#" class="hover:text-blue-600 transition">nosotros</a>
                <a href="#" class="hover:text-blue-600 transition">servicios</a>
                <a href="#" class="hover:text-blue-600 transition">contacto</a>
                <a href="#" class="hover:text-blue-600 transition">productos</a>
                <a href="#" class="hover:text-blue-600 transition">inventario</a>
                <a href="#" class="hover:text-blue-600 transition">donaciones</a>
                <a href="#" class="hover:text-blue-600 transition">despachos</a>
                <a href="#" class="hover:text-blue-600 transition">comedores</a>
                <a href="#" class="hover:text-blue-600 transition">reportes</a>
            </div>
        </nav>
    </header>

    <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-6">
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-slate-300 py-6 text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-center md:text-left">&copy; 2026 Banco de Alimentos - Todos los derechos reservados</p>
            
            <div class="flex flex-wrap justify-center gap-6 text-xs text-slate-400">
                <span>Contacto: info@bancodealimentos.org</span>
                <a href="#" class="hover:text-white transition">Aviso de Privacidad</a>
                <a href="#" class="hover:text-white transition">Redes Sociales</a>
            </div>
        </div>
    </footer>

</body>
</html>