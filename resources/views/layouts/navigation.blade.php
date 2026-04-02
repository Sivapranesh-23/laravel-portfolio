<nav class="navbar navbar-expand-lg navbar-light navbar-custom sticky-top">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="/" style="color:#2d2d2d;">
            Portfolio
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item">
                    <a href="/" class="nav-link fw-medium {{ request()->is('/') ? 'active' : '' }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/about" class="nav-link fw-medium {{ request()->is('about') ? 'active' : '' }}">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/projects" class="nav-link fw-medium {{ request()->is('projects*') ? 'active' : '' }}">
                        Projects
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/education" class="nav-link fw-medium {{ request()->is('education') ? 'active' : '' }}">
                        Education
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/experience" class="nav-link fw-medium {{ request()->is('experience') ? 'active' : '' }}">
                        Experience
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/contact" class="nav-link fw-medium {{ request()->is('contact') ? 'active' : '' }}">
                        Contact
                    </a>
                </li>

                <!-- Admin Button -->
                <li class="nav-item ms-3">
                    <a href="/login" class="btn btn-custom px-3">
                        Admin
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>