<header class="site-header bg-primary">

    <div class="container">

        <div class="top d-flex justify-content-end text-light">
            <small>DC POWER™ VISA®</small>
            <small>ADDITIONAL DC SITES</small>
        </div>
        <!-- .top -->

    </div>
    <!-- .container -->

    <div class="bg-white">

        <nav class="navbar navbar-expand-sm navbar-light d-flex">

            <div class="container">

                <ul class="list-unstyled d-flex align-items-center py-1">

                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">

                    <li class="px-2">
                        <a href="{{ route('welcome') }}" class="nav-link">HOME</a>
                    </li>
                    <li class="px-2">
                        <a href="{{ route('comics.index') }}" class="nav-link">COMICS</a>
                    </li>
                    <li class="px-2">
                        <a href="{{ route('comics.create') }}" class="dropdown-item">CREATE</a>
                    </li>
                    <li class="px-2">
                        <a href="" class="dropdown-item">MOVIES</a>
                    </li>
                    <li class="px-2">
                        <a href="" class="dropdown-item">TV</a>
                    </li>
                    <li class="px-2">
                        <a href="" class="dropdown-item">GAMES</a>
                    </li>
                    <li class="px-2">
                        <a href="" class="dropdown-item">COLLECTIBLES</a>
                    </li>
                    <li class="px-2">
                        <a href="" class="dropdown-item">VIDEOS</a>
                    </li>
                    <li class="px-2">
                        <a href="" class="dropdown-item">FANS</a>
                    </li>
                    <li class="px-2">
                        <a href="" class="dropdown-item">NEWS</a>
                    </li>
                    <li class="px-2">
                        <a href="" class="dropdown-item">SHOP</a>
                    </li>
                </ul>

                <span class="mb-3">
                    <input type="text" name="search" id="search" placeholder="Search">
                </span>

            </div>
            <!-- .container -->

        </nav>
        <!-- .navbar -->

    </div>
    <!-- /.bg-white -->

</header>
<!-- /.site-header -->
