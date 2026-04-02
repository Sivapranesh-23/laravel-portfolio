<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

    <style>

    body {
        background: #f8f5f2;
        font-family: 'Inter', sans-serif;
        color: #2d2d2d;
    }

    /* Navbar */
    .navbar-custom {
        background: rgba(255,255,255,0.7);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid #e5ded8;
    }

    /* Hero */
    .hero {
        padding: 100px 0;
    }

    /* Premium Cards */
    .card-custom {
        background: rgba(255,255,255,0.7);
        backdrop-filter: blur(10px);
        border: 1px solid #e5ded8;
        border-radius: 16px;
        padding: 25px;
        transition: 0.3s ease;
    }

    .card-custom:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }

    /* Buttons */
    .btn-custom {
        background: linear-gradient(135deg, #d6a77a, #c29566);
        color: white;
        border-radius: 8px;
        padding: 10px 20px;
        border: none;
    }

    .btn-custom:hover {
        opacity: 0.9;
    }

    /* Headings */
    h1, h2, h3 {
        font-weight: 600;
    }

    /* Sections */
    .section {
        padding: 80px 0;
    }

    .nav-link {
    color: #6b6b6b !important;
    margin-right: 10px;
    transition: 0.2s;
}

.nav-link:hover {
    color: #d6a77a !important;
}

/* Active link */
.nav-link.active {
    color: #d6a77a !important;
    font-weight: 600;
}

/* Navbar blur effect */
.navbar-custom {
    background: rgba(255,255,255,0.7);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid #e5ded8;
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
    <footer class="text-center py-4 mt-5" style="background:rgba(255,255,255,0.6); backdrop-filter:blur(10px);">

        <p class="mb-1 fw-medium">© {{ date('Y') }} My Portfolio</p>

        <div>
            <a href="#" class="text-muted me-3">GitHub</a>
            <a href="#" class="text-muted">LinkedIn</a>
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
document.documentElement.style.scrollBehavior = "smooth";

</script>
</body>
</html>