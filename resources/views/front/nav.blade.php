<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container">
      <a href="#" class="navbar-brand">Meu navbar</a>
      <!--<span class="navbar-brand mb-0 h1"> Meu navbar</span>-->
      <!--<a href="#" class="navbar-brand">
          <img src="assets/star.svg" width="30px" height="30px" class="d-inline-block align-top mr-2" alt="">
          Meu Navbar
      </a>-->

      <button type="button" data-toggle="collapse" data-target="#meuNavbar" class="navbar-toggler">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="meuNavbar">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a href="#" class="nav-link active">php</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">Sobre</a>
              </li>
              <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">Serviçes</a>
                  <div class="dropdown-menu">
                      <a href="#" class="dropdown-item">Design</a>
                      <a href="#" class="dropdown-item">program</a>
                      <a href="#" class="dropdown-item">support</a>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link disabled">products</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">contact</a>
              </li>
          </ul>

          <form class="form-inline d-none d-lg-inline-block ml-auto">
              <input type="text" class="form-control mr-2" placeholder="Buscar...">
              <button type="button" class="btn btn-danger">
                  Ok
              </button>
          </form>
      </div>
  </div>

</nav>