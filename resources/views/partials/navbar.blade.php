<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ set_active('home') }}" href="{{ route('home') }}">Home</a>
                <a class="nav-link {{ set_active(['productCatalogue', 'productCatalogue.slug']) }}" aria-current="page" href="{{ route('productCatalogue') }}">Catalogue</a>
            </div>
        </div>
    </div>
</nav>
