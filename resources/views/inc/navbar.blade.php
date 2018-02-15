 <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">


          <li class="{{Request::is('home') ? 'nav-item active' : '' }}">
            <a class="nav-link" href="/home">Home</a>
          </li>

            <li class="{{Request::is('albums') ? 'nav-item active' : '' }}">
              <a class="nav-link" href="/albums">Albums</a>
            </li>

            <li class="{{Request::is('photos') ? 'nav-item active' : '' }}">
              <a class="nav-link" href="/photos">Photos</a>
            </li>



        </ul>

      </div>
    </nav>