{{-- HEADER --}}

<header class="main-header">
    <!-- Navtop credits --->
    <div class="navtop">
        <div class="container">
            <ul class="flex justify-end">
                <li>DC power <span class="copyright">&#x2120;</span> Visa <span class="copyright">&#xae;</span></li>
                <li>Additional dc sites<i class="fas fa-caret-down"></i></li>
            </ul>
        </div> 
    </div> 
    <!-- Nav bar --->
    <div class="navbottom container pt-1 pb-1 flex align-center justify-between">
        <a class="navbar-brand" href="{{route('home')}}">
         <img src="{{ asset('img/logo.png') }}" alt="DC Comics Logo">
        </a>
        <nav class="navbar-nav">
            <ul class="flex justify between">
                <li>
                    <a href="/">Characters</a>
                </li>
                <li>
                    <a href="/">Comics</a>
                </li>
                <li>
                    <a href="/">Movies</a>
                </li>
                <li>
                    <a href="/">Tv</a>
                </li>
                <li>
                    <a href="/">Games</a>
                </li>
                <li>
                    <a href="/">Collectable</a>
                </li>
                <li>
                    <a href="/">Videos</a>
                </li>
                <li>
                    <a href="/">Fans</a>
                </li>
                <li>
                    <a href="/">News</a>
                </li>
                <li>
                    <a href="/">Shop <i class="fas fa-caret-down main-color"></i></a>
                </li>
                <li>
                    <input type="text" placeholder="Search">
                    <i class="fas fa-search"></i>
                </li>
            </ul>   
        </nav>
    </div>
</header>