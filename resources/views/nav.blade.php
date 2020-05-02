<!-- START nav.blade.php -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="height: 70px !important">
    <div class="container">
    <a class="navbar-brand" href="/" style="border-right:2px; border-color: hotpink">
        <span ><i class="fas fa-paw" style="color: hotpink;"></i></span>

    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{ Request::path() === '/' ? 'active' : '' }}" href="/"><b>Home</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::path() === 'cats' ? 'active' : '' }}" href="/cats"><b>Cats</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::path() === 'dogs' ? 'active' : '' }}" href="/dogs"><b>Dogs</b></a>
            </li>

        </ul>
        <ul class="navbar-nav float-right">
            <li class="nav-item">
                <a class="nav-link"  href="https://www.petfinder.com/" target="_blank"><b>Pet Adoption</b></a>
            </li>
        </ul>
        </div>
    </div>
</nav>
<!-- END nav.blade.php -->
