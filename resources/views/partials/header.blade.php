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

                <a class="navbar-brand" href="#">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </a>

                <ul class="list-unstyled d-flex">
                    <li class="px-2">
                        <a href="{{ route('welcome') }}">HOME</a>
                    </li>
                    <li class="px-2">
                        <a href="{{ route('comics.index') }}">COMICS</a>
                    </li>
                    <li class="px-2">
                        <a href="{{ route('comics.create') }}">CREATE</a>
                    </li>
                    <li class="px-2">
                        <a href="">MOVIES</a>
                    </li>
                    <li class="px-2">
                        <a href="">TV</a>
                    </li>
                    <li class="px-2">
                        <a href="">GAMES</a>
                    </li>
                    <li class="px-2">
                        <a href="">COLLECTIBLES</a>
                    </li>
                    <li class="px-2">
                        <a href="">VIDEOS</a>
                    </li>
                    <li class="px-2">
                        <a href="">FANS</a>
                    </li>
                    <li class="px-2">
                        <a href="">NEWS</a>
                    </li>
                    <li class="px-2">
                        <a href="">SHOP</a>
                    </li>
                </ul>

                <span>
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
