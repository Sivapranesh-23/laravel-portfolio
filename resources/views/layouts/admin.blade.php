<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #0f172a;
            color: white;
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
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #1e293b;
            color: white;
            border-radius: 5px;
        }

        .card-custom {
            background: rgba(255,255,255,0.05);
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <h4 class="mb-4">Admin</h4>

            <a href="/admin/dashboard">Dashboard</a>
            <a href="/admin/projects">Projects</a>
            <a href="/admin/education">Education</a>
            <a href="/admin/experience">Experience</a>
            <a href="/admin/settings">Resume</a>

            <hr>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-danger w-100 mt-2">Logout</button>
            </form>
        </div>

        <!-- Content -->
        <div class="col-md-10 p-4">
            @yield('content')
        </div>

    </div>
</div>

</body>
</html>