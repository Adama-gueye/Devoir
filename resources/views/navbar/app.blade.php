   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
    <div class="container mb-">
      <a class="navbar-brand" href="{{ route('classe') }}"
        ><img
          id="logo"
          src="logo.jpg"
          alt="Logo"
          draggable="false"
          height="30"
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{ route('etudiants.index') }}"><i class="fas fa-plus-circle pe-2"></i>Ajout_Etudiant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{ route('matieres.index') }}"><i class="fas fa-bell pe-2"></i>Ajout_Matiere</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{ route('semestres.index') }}"><i class="fas fa-bell pe-2"></i>Ajout_Semestre</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->