<div class="container d-flex justify-content-center">

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3 border border-dark border-top-0">
        <a class="navbar-brand" href="/">Comics</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route("comics.create") }}">Inserisci un fumetto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route("comics.index") }}">Lista comics</a>
            </li>
          </ul>
        </div>
    </nav>

</div>