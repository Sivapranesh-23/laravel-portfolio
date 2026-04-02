<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #0f172a;
            color: #e2e8f0;
        }

        .sidebar {
            height: 100vh;
            background: #020617;
            padding: 20px;
        }

        .sidebar a {
            display: block;
            color: #94a3b8;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 6px;
            text-decoration: none;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #1e293b;
            color: white;
        }

        .topbar {
            background: rgba(255,255,255,0.05);
            padding: 10px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .card-custom {
            background: rgba(255,255,255,0.05);
            border-radius: 12px;
            padding: 20px;
            transition: 0.3s;
        }

        .card-custom:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar">

            <h4 class="mb-4">⚡ Admin</h4>

            <a href="/admin/dashboard" class="active">🏠 Dashboard</a>
            <a href="/admin/projects">📁 Projects</a>
            <a href="/admin/education">🎓 Education</a>
            <a href="/admin/experience">💼 Experience</a>
            <a href="/admin/settings">📄 Resume</a>

            <hr>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-danger w-100 mt-2">Logout</button>
            </form>

        </div>

        <!-- Content -->
        <div class="col-md-10 p-4">

            <!-- Topbar -->
            <div class="topbar d-flex justify-content-between align-items-center">
                <h5 class="m-0">Dashboard</h5>
                <span>{{ Auth::user()->name ?? 'Admin' }}</span>
            </div>

            @yield('content')

        </div>

    </div>
</div>

</body>
</html>