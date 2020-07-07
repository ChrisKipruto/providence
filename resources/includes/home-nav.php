<nav class="navbar navbar-expand-lg navbar-light light-blue lighten-4 shadow-md fixed-top">
    <!-- nav container -->
    <div class="container-fluid">
        <!-- navbar brand -->
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>"
            class="navbar-brand outline-none d-flex align-items-center">
            <img src="../../../public/img/logo/logo1.png" class="h-14" alt="Providence Brand Logo">
            <span class="uppercase pink-text font-bold text-2xl pl-2">
                <!-- Pro -->
            </span>
        </a>

        <!-- Toggle Navigation -->
        <button type="button" class="navbar-toggler" data-toggle="collapse"
            data-target="#homeNavbarCollapse">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible Content -->
        <div class="collapse navbar-collapse" id="homeNavbarCollapse">
            <!-- Left Side -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link outline-none font-navbar">Home</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link outline-none font-navbar">About Us</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link outline-none font-navbar">Services</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link outline-none font-navbar">Contact Us</a>
                </li>
            </ul>

            <!-- Right Side -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link outline-none font-navbar">Sign Up</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link outline-none font-navbar">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>