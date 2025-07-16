<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Home') - Arty Creations</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inder&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    @vite(["resources/css/app.css", "resources/js/app.js" ])
</head>
    
<body class="min-h-screen m-0 p-0">
    @include('partials.navigation')

    <div class="w-full py-12">
        @yield('content')
    </div>
 
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggleBtn = document.querySelector('[data-collapse-toggle="navbar-cta"]');
            const menu = document.getElementById('navbar-cta');

            toggleBtn.addEventListener('click', function () {
            menu.classList.toggle('hidden');
            });
        });
    </script>

    @stack("scripts")

</body>
</html>
