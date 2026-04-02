<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite('resources/css/app.css')

    <style>
body {
    background: #0f172a;
    color: #e2e8f0;
}

/* Glass effect */
.glass {
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 20px;
}

/* Hover animation */
.card-hover:hover {
    transform: translateY(-5px);
    transition: 0.3s ease;
}

/* Navbar */
.navbar-custom {
    background: rgba(15, 23, 42, 0.8);
    backdrop-filter: blur(8px);
}

/* Buttons */
.btn-custom {
    background: #3b82f6;
    border: none;
}
.btn-custom:hover {
    background: #2563eb;
}
</style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    @include('layouts.navigation')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center p-6 mt-10">
    <p>© {{ date('Y') }} My Portfolio</p>

    <div class="mt-2 space-x-4">
        <a href="#" class="hover:text-blue-400">GitHub</a>
        <a href="#" class="hover:text-blue-400">LinkedIn</a>
    </div>
</footer>

<script>
document.querySelectorAll('.card-hover').forEach(card => {
    card.addEventListener('mouseover', () => {
        card.style.transform = "scale(1.02)";
    });
    card.addEventListener('mouseout', () => {
        card.style.transform = "scale(1)";
    });
});
</script>
</body>
</html>