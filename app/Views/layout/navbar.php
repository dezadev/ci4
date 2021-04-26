<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <h1>deZadev</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/pages/about">About</a>
                <a class="nav-link" href="/pages/contak">Contak</a>
                <a class="nav-link" href="/komik/index">Komik</a>
                <a class="nav-link" href="/orang/index">Orang</a>
                <a class="nav-link" href="/news/news">News</a>
            </div>
        </div>
        <?php if (logged_in()) : ?>
            <a class="nav-link" href="/logout">Logout</a>
        <?php else : ?>
            <a class="nav-link" href="/login">Login</a>
        <?php endif; ?>
    </div>
</nav>